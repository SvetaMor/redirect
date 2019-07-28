<?php
namespace svetamor\redirect;

use yii\base\BaseObject;
use svetamor\redirect\interfaces\IArray;

class RedirectComponent extends BaseObject
{
    protected $arr;
    
    public function __construct(IArray $arr)
    {
        $this->arr = $arr; 
        $this->init();
    }
    
    public function init()
    {
        $currUrl =  $_SERVER['REQUEST_URI'];
        
        $this->arr->getArr($currUrl);
    }
} 
