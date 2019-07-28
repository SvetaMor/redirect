<?php
namespace svetamor\redirect;

use svetamor\redirect\interfaces\IArray;
use svetamor\redirect\interfaces\IGettingUrl;

class ArrayCsv implements IArray
{
    protected $gettingUrl;
    
    public function __construct(IGettingUrl $gettingUrl)
    {
        $this->gettingUrl = $gettingUrl; 
    }
    
    public function getArr($url)
    {
        $filePath = '/files/redirect.csv';
        $fileName = \Yii::getAlias('@webroot').$filePath;
        $csv = array_map('str_getcsv',file($fileName));
        
        $this->gettingUrl->getUrl($csv, $url);
    }
}
