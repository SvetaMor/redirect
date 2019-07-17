<?php
namespace svetamor\redirect;

class Redirect
{
    public static function redirect($url)
    {
        \Yii::$app->response->redirect($url, 301)->send();
        \Yii::$app->end();
    }
} 
