<?php
namespace svetamor\redirectcomponent;
use svetamor\redirectcomponent\interfaces\GettingUrlInterface;

class GettingUrl implements GettingUrlInterface{

   public function getUrl($arr, $url){
      $new_url = $url;
      $limit = count($arr);
      
      for ($count = 0; $count < $limit; $count++) 
         if ($arr[$count][0] == $url) {
            $new_url = $arr[$count][1];
            Redirect::redirect($new_url);
         }  
   }
}   