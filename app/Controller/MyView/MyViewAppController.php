<?php

class MyViewAppController extends AppController {

  public $uses = ['Post'];

  public function beforeRender(){
    App::build(['View' => [ROOT.DS.APP_DIR.DS.'View'.DS.'MyView'.DS.$this->viewPath.DS]]);
  }

}
