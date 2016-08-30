<?php

App::uses('AppController', 'Controller');

class PostControllerTest extends ControllerTestCase {

  public $fixtures = array('app.post');

  public function testIndex() {
      $result = $this->testAction('/post/index');
      debug($result);
  }

  public function testDetail() {
      $result = $this->testAction('/post/detail/1');
      debug($result);
  }

  public function testAdd_get() {
    $result = $this->testAction('/post/add', ['method' => 'get']);
    debug($result);
  }

  public function testAdd_post() {
    $result = $this->testAction('/post/add', ['method' => 'post']);
    $this->assertContains('/post', $this->headers['Location']);
    $flash = CakeSession::read('Message.flash');
    $this->assertTextContains('追加しました。', $flash['message']);
  }

/*
    public function testIndexShort() {
        $result = $this->testAction('/post/index/short');
        debug($result);
    }

    public function testIndexShortGetRenderedHtml() {
        $result = $this->testAction(
           '/post/index/short',
            array('return' => 'contents')
        );
        debug($result);
    }

    public function testIndexShortGetViewVars() {
        $result = $this->testAction(
            '/post/index/short',
            array('return' => 'vars')
        );
        debug($result);
    }

    public function testIndexPostData() {
        $data = array(
            'Article' => array(
                'user_id' => 1,
                'published' => 1,
                'slug' => 'new-article',
                'title' => 'New Article',
                'body' => 'New Body'
            )
        );
        $result = $this->testAction(
            '/post/index',
            array('data' => $data, 'method' => 'post')
        );
        debug($result);
    }
*/
}
