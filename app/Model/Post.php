<?php

class Post extends AppModel {

  public $validate = [
    'title' => [
      'Rule-1' => [
        'rule' => ['between', 10, 20],
        'message' => 'タイトルは10文字から20文字で入力してください'
      ],
    ],
  ];

}
