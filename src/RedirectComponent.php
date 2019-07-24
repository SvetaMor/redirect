<?php
namespace svetamor\redirect;

use yii\base\BaseObject;
use svetamor\redirect\interfaces\IArray;
use yii\di\Container;

class RedirectComponent extends BaseObject
{
    public function init()
    {
        $container= new Container();
        $currUrl =  $_SERVER['REQUEST_URI'];
        
        //редирект из БД
        //$container->set('IArray','\svetamor\redirect\ArrayBd');
        //$filePath = 'redirect';
        
        //редирект из файла
        $container->set('IArray','\svetamor\redirect\ArrayCsv');
        $filePath = '/files/redirect.csv';
        
        $obj = $container->get('IArray');
        $obj->getArr($filePath, $currUrl);
    }
} 
