<?php

App::uses('Controller', 'Controller');
App::uses('View', 'View');
App::uses('ProgressHelper', 'View/Helper');

class AppHelperTest extends CakeTestCase {

    public function setUp() {
      parent::setUp();
      $this->Controller = new Controller();
      $this->View = new View($this->Controller);
      $this->App = new AppHelper($this->View);
    }

    public function testSplitPage() {
      $arg['Post'] = [
        'id' => 1,
        'content' => 'page1[nextpage_title="next"]page2'
      ];
      $_SERVER['REQUEST_METHOD'] = 'GET';
      $result = $this->App->splitPage($arg);
      $this->assertContains('次のページ', $result);
      $this->assertContains('<ul class="in-post-pager">', $result);

      $this->View->request->query['p'] = 2;
      $result = $this->App->splitPage($arg);
      $this->assertContains('<ul class="in-post-pager">', $result);
    }

}
