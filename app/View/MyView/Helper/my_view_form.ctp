<a href="/my_view/helper/">戻る</a>
<h2>Formヘルパー</h2>

<?php echo $this->Form->create('Post', ['type' => 'post']); ?>

<?php echo $this->Form->input('title'); ?>


<?php
$options = array(
    'Value 1' => 'Label 1',
    'Value 2' => 'Label 2'
);
echo $this->Form->select('Post.field', $options, array(
    'multiple' => 'checkbox',
    'class' => 'hoge',
    'disabled' => array('Value 1')
));
?>

<?php
echo $this->Form->submit('送信', array(
    'div'=>false,
    'class' => 'btn btn-primary',
    'name' => 'submit'));
?>

<?php echo $this->Form->end(); ?>

<br><br>

========================================================================================================================================================================================

<br><br>

<form action="/my_view/helper/form" method="post" accept-charset="utf-8">
<div class="input text">
  <label>Title</label><input name="data[Post][title]" type="text">
  <?php if(isset($errors['title'][0])) echo $errors['title'][0]; ?>
</div>

<div class="hoge"><input type="checkbox" name="data[Post][field][]" disabled="disabled" value="1"><label>Label 1</label></div>
<div class="hoge"><input type="checkbox" name="data[Post][field][]" value="2"><label>Label 2</label></div>

<input class="btn btn-primary" name="submit" type="submit" value="送信">
</form>
