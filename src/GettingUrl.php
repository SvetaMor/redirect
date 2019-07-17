<?php
namespace svetamor\redirect;

use app\components\redirect\interfaces\GettingUrlInterface;

class GettingUrl implements GettingUrlInterface
{
    public static function getUrl($arr, $url)
    {
        $newUrl = $url;
        $limit = count($arr);
      
        for ($count = 0; $count < $limit; $count++) {
            if ($arr[$count][0] === $url) {
                $newUrl = $arr[$count][1];
                Redirect::redirect($newUrl);
            }
        }    
    }
}
