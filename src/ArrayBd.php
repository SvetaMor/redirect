<?php
namespace svetamor\redirect;

use app\components\redirect\interfaces\ArrayInterface;
use yii\db\Query;

class ArrayBd implements ArrayInterface
{
    public static function getArr($tableName, $url)
    {
        $newUrl = (new Query())
            ->select(['newUrl'])
            ->from($tableName)
            ->where(['currUrl' => $url])
            ->all();
        
        if ($newUrl[0]['newUrl'] != null) {
            Redirect::redirect($newUrl[0]['newUrl']);
        }    
    }
}