<?php

class PostController extends AppController {

  public function index() {
    $posts = $this->Post->find('all');
    #new dBug($posts);
    #die;
    $this->set(compact('posts'));
  }

  public function detail($pid){
    $post = $this->Post->findById($pid);
    $this->set(compact('post'));
  }

  public function add(){
    $this->set('title_for_layout', '記事追加画面');
    if ($this->request->is('post')) {
      if ($this->Post->save($this->request->data)) {
        $this->Session->setFlash('追加しました。');
        return $this->redirect(['action' => 'index']);
      }
    }
    return $this->render();
  }

}
