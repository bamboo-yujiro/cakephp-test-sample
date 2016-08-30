<ul>
<?php foreach($posts as $post): ?>

<li><a href="/post/detail/<?php echo $post['Post']['id']; ?>"><?php echo $post['Post']['title']; ?></a></li>

<?php endforeach; ?>
</ul>
