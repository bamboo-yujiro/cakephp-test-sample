<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {

  public $components = ['DebugKit.Toolbar'];

  public $uses = [
    'Post'
  ];

  public function beforeRender(){
    App::build(['View' => [ROOT.DS.APP_DIR.DS.'View'.DS.$this->viewPath.DS]]);
  }

}
