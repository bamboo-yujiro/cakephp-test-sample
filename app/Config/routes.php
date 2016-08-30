<?php

  Router::connect('/', array('controller' => 'main', 'action' => 'index'));

  Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

  /* View Prefix core.php には設定しない */
  $prefix = 'my_view';
  $name = 'my_view';
  Router::connect(
      "/{$prefix}",
      array('action' => 'index', 'controller' => 'main', 'prefix' => $name, $name => true)
  );
  Router::connect(
      "/{$prefix}/",
      array('action' => 'index', 'controller' => 'main', 'prefix' => $name, $name => true)
  );
  Router::connect(
      "/{$prefix}/:controller",
      array('action' => 'index', 'prefix' => $name, $name => true)
  );
  Router::connect(
      "/{$prefix}/:controller/:action/*",
      array('prefix' => $name, $name => true)
  );
  unset($prefix,$name);
  /* View Prefix 終了 */

  CakePlugin::routes();

  require CAKE . 'Config' . DS . 'routes.php';
