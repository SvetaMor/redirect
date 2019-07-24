<?php
namespace svetamor\redirect;

use svetamor\redirect\interfaces\IArray;
use svetamor\redirect\interfaces\IGettingUrl;
use yii\di\Container;

class ArrayCsv implements IArray
{
    public static function getArr($filePath, $url)
    {
        $container= new Container();
        $container->set('IGettingUrl','\svetamor\redirect\GettingUrl');
        $obj = $container->get('IGettingUrl');
        
        $fileName = \Yii::getAlias('@webroot').$filePath;
        $csv = array_map('str_getcsv',file($fileName));
        $obj->getUrl($csv, $url);
    }
}
