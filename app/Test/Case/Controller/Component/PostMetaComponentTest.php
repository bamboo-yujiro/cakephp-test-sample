<?php

App::uses('Controller', 'Controller');
App::uses('CakeRequest', 'Network');
App::uses('CakeResponse', 'Network');
App::uses('ComponentCollection', 'Controller');
App::uses('AppController', 'Controller');
App::uses('PostController', 'Controller');
App::uses('PostMetaComponent', 'Controller/Component');


/* Fake */
#class TestPostMetaController extends Controller {
#    public $paginate = null;
#}

class PostMetaComponentTest extends CakeTestCase {

  public $fixtures = ['app.post'];
  public $PostMetaComponent = null;
  public $Controller = null;

  public function setUp() {
    parent::setUp();
    $Collection = new ComponentCollection();
    $this->PostMetaComponent = new PostMetaComponent($Collection);
    $CakeRequest = new CakeRequest();
    $CakeResponse = new CakeResponse();
    $this->Controller = new PostController($CakeRequest, $CakeResponse);
    $this->PostMetaComponent->startup($this->Controller);
  }

  public function testGetNextPost() {
    $nPost = $this->PostMetaComponent->getNextPost(1);
    $this->assertArrayHasKey('Post', $nPost);
    $this->assertArrayHasKey('id', $nPost['Post']);
    $this->assertEquals(2, $nPost['Post']['id']);
    $this->assertArrayHasKey('title', $nPost['Post']);
    $this->assertArrayHasKey('content', $nPost['Post']);
  }

  public function tearDown() {
    parent::tearDown();
    unset($this->PostMetaComponent);
    unset($this->Controller);
  }

}
