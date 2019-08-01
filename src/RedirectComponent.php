<?php
namespace svetamor\redirect;

use yii\base\BaseObject;
use svetamor\redirect\interfaces\AbstractArray;

class RedirectComponent extends BaseObject
{
    protected $arr;
    
    public function __construct(AbstractArray $arr)
    {
        $this->arr = $arr; 
        $this->init();
    }
    
    public function init()
    {
        $currUrl = \Yii::$app->request->url;
        
        $this->arr->getArr($currUrl);
    }
} 
