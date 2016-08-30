<?php $cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework'); ?>
<!DOCTYPE html>
<html>
<head>
  <?php echo $this->Html->charset(); ?>
  <title>
    <?php echo $cakeDescription ?>:
    <?php echo $this->fetch('title'); ?>
  </title>
  <?php
    echo $this->Html->meta('icon');

    echo $this->Html->css('cake.generic');

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
  ?>
  <link type="text/css" rel="stylesheet" href="/syntaxhighlighter_3.0.83/styles/shCore.css" />
  <link type="text/css" rel="stylesheet" href="/syntaxhighlighter_3.0.83/styles/shThemeDefault.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script type="text/javascript" src="/syntaxhighlighter_3.0.83/scripts/shCore.js"></script>
  <script type="text/javascript" src="/syntaxhighlighter_3.0.83/scripts/shBrushBash.js"></script>
  <script type="text/javascript" src="/syntaxhighlighter_3.0.83/scripts/shBrushCpp.js"></script>
  <script type="text/javascript" src="/syntaxhighlighter_3.0.83/scripts/shBrushCSharp.js"></script>
  <script type="text/javascript" src="/syntaxhighlighter_3.0.83/scripts/shBrushCss.js"></script>
  <script type="text/javascript" src="/syntaxhighlighter_3.0.83/scripts/shBrushDelphi.js"></script>
  <script type="text/javascript" src="/syntaxhighlighter_3.0.83/scripts/shBrushDiff.js"></script>
  <script type="text/javascript" src="/syntaxhighlighter_3.0.83/scripts/shBrushGroovy.js"></script>
  <script type="text/javascript" src="/syntaxhighlighter_3.0.83/scripts/shBrushJava.js"></script>
  <script type="text/javascript" src="/syntaxhighlighter_3.0.83/scripts/shBrushJScript.js"></script>
  <script type="text/javascript" src="/syntaxhighlighter_3.0.83/scripts/shBrushPhp.js"></script>
  <script type="text/javascript" src="/syntaxhighlighter_3.0.83/scripts/shBrushPlain.js"></script>
  <script type="text/javascript" src="/syntaxhighlighter_3.0.83/scripts/shBrushPython.js"></script>
  <script type="text/javascript" src="/syntaxhighlighter_3.0.83/scripts/shBrushRuby.js"></script>
  <script type="text/javascript" src="/syntaxhighlighter_3.0.83/scripts/shBrushScala.js"></script>
  <script type="text/javascript" src="/syntaxhighlighter_3.0.83/scripts/shBrushSql.js"></script>
  <script type="text/javascript" src="/syntaxhighlighter_3.0.83/scripts/shBrushVb.js"></script>
  <script type="text/javascript" src="/syntaxhighlighter_3.0.83/scripts/shBrushXml.js"></script>
  <script type="text/javascript">
     SyntaxHighlighter.config.clipboardSwf = '/syntaxhighlighter_3.0.83/scripts/clipboard.swf';
     SyntaxHighlighter.all();
  </script>
</head>
<body>
  <div id="container">
    <div id="header">
      <h1><?php echo $this->Html->link($cakeDescription, '/'); ?></h1>
    </div>
    <div id="content">

      <?php echo $this->Session->flash(); ?>

      <?php echo $this->fetch('content'); ?>
    </div>
    <div id="footer">
      <?php echo $this->Html->link(
          $this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
          'http://www.cakephp.org/',
          array('target' => '_blank', 'escape' => false)
        );
      ?>
    </div>
  </div>
  <?php echo $this->element('sql_dump'); ?>
</body>
</html>
