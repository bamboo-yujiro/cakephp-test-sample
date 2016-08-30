<?php
class DATABASE_CONFIG {

  public $default = array(
    'datasource' => 'Database/Mysql',
    'persistent' => false,
    'port' => 3306,
    'host' => 'localhost',
    'login' => 'root',
    'password' => 'kani',
    'database' => 'my_cakephp',
  );

  public $test = array(
    'datasource' => 'Database/Mysql',
    'persistent' => false,
    'port' => 3306,
    'host' => 'localhost',
    'login' => 'root',
    'password' => 'kani',
    'database' => 'test_my_cakephp',
  );

}
