<?php
namespace svetamor\redirect;

use svetamor\redirect\interfaces\IGettingUrl;
use svetamor\redirect\interfaces\IRedirect;
use yii\di\Container;

class GettingUrl implements IGettingUrl
{
    public static function getUrl($arr, $url)
    {
        $container= new Container();
        $container->set('IRedirect','\svetamor\redirect\Redirect');
        $obj = $container->get('IRedirect');
        
        $newUrl = $url;
        $limit = count($arr);
      
        for ($count = 0; $count < $limit; $count++) {
            if ($arr[$count][0] === $url) {
                $newUrl = $arr[$count][1];
                $obj->redirect($newUrl);
            }
        }    
    }
}
