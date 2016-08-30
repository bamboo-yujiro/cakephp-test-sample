<?php

class PostController extends AppController {

  public function index() {
    $posts = $this->Post->find('all');
    #new dBug($posts);
    #die;
    $this->set(compact('posts'));
  }

  public function detail($pid){
    $post = $this->Post->findById($pid);
    $this->set(compact('post'));
  }

}
