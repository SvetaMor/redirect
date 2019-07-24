<?php
namespace svetamor\redirect;

use svetamor\redirect\interfaces\IArray;
use svetamor\redirect\interfaces\IGettingUrl;
use yii\di\Container;
use yii\db\Query;

class ArrayBd implements IArray
{
    public static function getArr($tableName, $url)
    {
        $container= new Container();
        $container->set('IGettingUrl','\svetamor\redirect\GettingUrl');
        $obj = $container->get('IGettingUrl');
        
        $arr = (new Query())
            ->select(['currUrl','newUrl'])
            ->from($tableName)
            ->all();
        
        $limit = count($arr);
        
        for ($count = 0; $count < $limit; $count++) {
            $newArr[$count] = array_values($arr[$count]);
        }    
          
        $obj->getUrl($newArr, $url);
    }
}
