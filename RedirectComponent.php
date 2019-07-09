<?php
namespace app\components;

use yii\base\Component;

class RedirectComponent extends Component { 
   
   public function init() {
      $file_path = '/files/redirect.csv';
      $filename =  \Yii::getAlias('@webroot').$file_path;
      $csv = array_map('str_getcsv',file($filename));
      
      $url =  $_SERVER['REQUEST_URI'];
         
      $limit = count($csv);
      for ($count = 0; $count < $limit; $count++) {
         if ($csv[$count][0] == $url) {
            \Yii::$app->response->redirect($csv[$count][1], 301)->send();
            \Yii::$app->end();
            return;
         }   
      }
   }
} 