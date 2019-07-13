<?php
namespace svetamor\redirectcomponent;

class Redirect{
   
   public function redirect($url) {
      \Yii::$app->response->redirect($url, 301)->send();
      \Yii::$app->end();
   }
} 