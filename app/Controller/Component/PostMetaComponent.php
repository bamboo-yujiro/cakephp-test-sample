<?php

class PostMetaComponent extends Component {

    public $Controller = null;

    public function startup(Controller $controller) {
        parent::startup($controller);
        $this->Controller = $controller;
    }

    public function getNextPost($pid) {
      $post = $this->Controller->Post->find('first', [
        'conditions' => [
          'Post.id >' => $pid
        ]
      ]);
      return $post;
    }

}
