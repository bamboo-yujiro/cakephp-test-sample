<?php
App::uses('Helper', 'View');

class AppHelper extends Helper {

  public function splitPage($post){
    $content = $post['Post']['content'];
    $postId = $post['Post']['id'];
    if(empty($this->request->query('p'))){
      $page = 1;
    }else{
      if($this->request->query('p') == 'all'){
        $page = 'all';
      }else{
        $page = (int) $this->request->query('p');
      }
    }
    if($page == 'all') return $content;
    $patStr = '/\[nextpage_title="(.*?)"\]/s';
    preg_match_all($patStr, $content, $pMatch);
    $pageCount = count($pMatch[0]) + 1;
    if($pageCount < $page){
      return null;
    }
    if($page == 1){
      $sPlaceCount = 0;
    }else{
      $startSplitTxt = $pMatch[0][$page-2];
      $sPlaceCount = mb_strpos($content, $startSplitTxt)+mb_strlen($startSplitTxt);
    }
    if(count($pMatch[0]) == $page-1){
      $ePlaceCount = mb_strlen($content);
    }else{
      $endSplitTxt = $pMatch[0][$page-1];
      $ePlace = mb_strpos($content, $endSplitTxt)+mb_strlen($endSplitTxt);
      $ePlaceCount = (isset($sPlaceCount)) ? $ePlace - $sPlaceCount : $ePlace;
    }
    $splitedContent = mb_substr($content, $sPlaceCount, $ePlaceCount);
    $splitedContent = preg_replace_callback($patStr,
      function($m) use($page, $content, $postId){
        return '<a href="'.$postId.'?p='.($page+1).'" class="inner-npage-link"><p class="inner-next-page">次のページ : '.$m[1].'</p></a>';
      },
      $splitedContent
    );
    $pagerElem = $this->_makePager($content, $page, $pageCount, $postId);
    return $splitedContent.$pagerElem;
  }


  private function _makePager($content, $page, $pageCount, $postId){
    $e = '<ul class="in-post-pager">';
    $count = 8;//繰り返す回数
    $threw = 3;//1 => 3ページ目から2が最初. 2 => 4ページ目から 2が最初.  3 => 5ページ目から2が最初
    if($count > $pageCount){
      $count = $pageCount;
      $pageI = 1;
    }elseif($page == $pageCount){
      $pageI = $pageCount - $count + 1;
    }elseif($page - $threw > 0){
      $pageI = $page - $threw;
      if($pageI + $count > $pageCount){
        $pageI = $pageCount - $count + 1;
      }
    }elseif($page - $threw == 0){
      $pageI = 1;
    }else{
      $pageI = $page;
    }
    $e .= $this->_pagerLoop($pageI, $count, $page, $postId, $content);
    if($page != $pageCount){
      $nextPage = $page + 1;
      $e .= '<li><a href="'.$postId.'?p='.$nextPage.'">次のページ</a></li>';
    }
    $e .= '</ul>';
    return $e;
  }

  private function _pagerLoop($pageI, $count, $page, $postId, $content){
    $e = '';
    for($i=$pageI; $i < $pageI + $count; $i++){
      $c = ($page == $i) ? ' class="active"': null;
      $e .= '<li'.$c.'><a href="'.$postId.'?p='.$i.'">'.$i.'</a></li>';
    }
    return $e;
  }


}
