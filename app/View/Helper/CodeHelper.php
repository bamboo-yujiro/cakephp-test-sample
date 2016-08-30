<?php

class CodeHelper extends AppHelper {

  public function render($name){
    return h(file_get_contents(WWW_ROOT.'php_code/'.$name.'.txt'));
  }


}
