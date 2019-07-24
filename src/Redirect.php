<?php
namespace svetamor\redirect;

use svetamor\redirect\interfaces\IRedirect;

class Redirect implements IRedirect
{
    public static function redirect($url)
    {
        \Yii::$app->response->redirect($url, 301)->send();
        \Yii::$app->end();
    }
} 
