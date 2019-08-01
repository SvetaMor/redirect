<?php
namespace svetamor\redirect;

use svetamor\redirect\interfaces\AbstractArray;

class ArrayCsv extends AbstractArray
{
    public function getArr($url)
    {
        $fileName = \Yii::getAlias('@webroot').$this->filePath;
        $csv = array_map('str_getcsv',file($fileName));
        
        $this->gettingUrl->getUrl($csv, $url);
    }
}
