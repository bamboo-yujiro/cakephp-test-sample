<?php

class PostFixture extends CakeTestFixture {

      public $useDbConfig = 'test';

      #public $import = 'Article';

      public $fields = array(
          'id' => array('type' => 'integer', 'key' => 'primary'),
          'title' => array(
            'type' => 'string',
            'length' => 255,
            'null' => false
          ),
          'content' => 'text',
          'created' => 'datetime',
          'updated' => 'datetime'
      );

      public $records = array(
          array(
            'id' => 1,
            'title' => 'First Article',
            'content' => 'First Article Body',
            'created' => '2016-03-18 10:39:23',
            'updated' => '2016-03-18 10:41:31'
          ),
          array(
            'id' => 2,
            'title' => 'Second Article',
            'content' => 'Second Article Body',
            'created' => '2016-03-18 10:41:23',
            'updated' => '2016-03-18 10:43:31'
          ),
          array(
            'id' => 3,
            'title' => 'Third Article',
            'content' => 'Third Article Body',
            'created' => '2016-03-18 10:43:23',
            'updated' => '2016-03-18 10:45:31'
          )
      );
 }
