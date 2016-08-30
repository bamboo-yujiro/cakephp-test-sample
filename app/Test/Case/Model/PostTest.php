<?php

App::import('Model', 'Post');

class PostTest extends CakeTestCase {

  public $fixtures = array('app.post');

  public function setUp() {
    $this->Post = ClassRegistry::init('Post');;
  }

  public function tearDown() {
    unset($this->Post);
  }

  public function testValidate() {
    $data = ['title' => 'testtest'];
    $this->Post->set($data);
    $result = $this->Post->validates();
    $this->assertFalse($result);
  }

}
