<?php
namespace svetamor\redirect;

use app\components\redirect\interfaces\ArrayInterface;

class ArrayCsv implements ArrayInterface
{
    public static function getArr($filePath, $url)
    {
        $fileName = \Yii::getAlias('@webroot').$filePath;
        $csv = array_map('str_getcsv',file($fileName));
        GettingUrl::getUrl($csv, $url);
    }
}
