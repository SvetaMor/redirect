<?php
namespace svetamor\redirectcomponent;
use svetamor\redirectcomponent\interfaces\ArrayInterface;

class Arraycsv implements ArrayInterface{
   
   public function getArr($file_path, $url) {
     
      $filename =  \Yii::getAlias('@webroot').$file_path;
      $csv = array_map('str_getcsv',file($filename));
      GettingUrl::getUrl($csv, $url);
   }
}