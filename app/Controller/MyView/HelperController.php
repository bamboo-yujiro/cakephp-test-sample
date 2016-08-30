<?php

class HelperController extends MyViewAppController {

  public function my_view_index() {
  }

  public function my_view_html() {
  }

  public function my_view_form() {
    if($this->request->is('post')){
      if(!$this->Post->save($this->request->data)){
        $errors = $this->Post->validationErrors;
        #new dBug($errors);
        #die;
        $this->set(compact('errors'));
        $this->render();
      }
    }
  }

  public function my_view_js() {

  }

  public function my_view_element() {

  }

  public function my_view_fuga($id){
    var_dump($this->request->is('post'));
    var_dump($id);
    exit;
  }

}
