<a href="/my_view/helper/">戻る</a>
<h2>elementについて</h2>

例)
<pre class="brush:php">
echo $this->element('header');
</pre>
=> app/View/Elements/ を探しに行く

<br><br>

下記をコントローラーで書けば
<pre class="brush:php">
App::build(['View' => [ROOT.DS.APP_DIR.DS.'View'.DS.'Sample'.DS.$this->viewPath.DS]]);
</pre>
=> app/View/Sample/[Controller名]/ を探しに行く

