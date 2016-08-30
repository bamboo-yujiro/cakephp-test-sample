<a href="/my_view/helper/">戻る</a>
<h2>Htmlヘルパー</h2>

<p>Linkメソッド</p>

<pre class="brush:php">
<?php echo $this->Code->render('link'); ?>
</pre>

<p>以下のように展開される</p>

<pre class="brush:html">
<a href="/user/regist">
<img src="/img/user/button01.png" alt="">
</a>
</pre>

========================================================================================================================================================================================

<?php
echo $this->Html->link( 'click me',
    ['controller' => 'hoge', 'action' => 'fuga'],
    ['class'=>'link_style'],
    'OK?'
    );
?>
<br><br>

<a href="/hoge/fuga/" onclick="if(!confirm('ok?')){return false;}">click me!</a>

<br><br>

<?php
echo $this->Html->link(
  $this->Html->image('test-error-icon.png'),
  ['controller' => 'hoge','action'=>'fuga'],
  ['escape' => false]
);
?>

<br><br>

<a href="/my_view/Hoge/fuga"><img src="/img/test-error-icon.png" alt=""/></a>

<br><br>

PostLink メソッド

<br><br>
<?php echo $this->Form->postLink('Post Link' ,['action'=>'fuga', 1], ['class' => 'del', 'confirm'=>'ほげほげ! よろしいですか？']); ?>
