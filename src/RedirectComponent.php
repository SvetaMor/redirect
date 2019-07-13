<?php
namespace svetamor\redirectcomponent;

use yii\base\Component;

class RedirectComponent extends Component{ 
   
   private $file_path;
   private $curr_url;
   
   public function init() {
      
      $this->file_path = '/files/redirect.csv';
      $this->curr_url =  $_SERVER['REQUEST_URI'];
      
      Arraycsv::getArr($this->file_path, $this->curr_url);
   }
} 
