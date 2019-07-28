<?php
namespace svetamor\redirect\interfaces;

use svetamor\redirect\interfaces\IArray;
use svetamor\redirect\interfaces\IGettingUrl;
use yii\db\Query;

class ArrayBd implements IArray
{
    protected $gettingUrl;
    
    public function __construct(IGettingUrl $gettingUrl)
    {
        $this->gettingUrl = $gettingUrl; 
    }
    
    public function getArr($url)
    {
        $tableName = 'redirect';
        
        $arr = (new Query())
            ->select(['currUrl','newUrl'])
            ->from($tableName)
            ->all();
        
        $limit = count($arr);
        
        for ($count = 0; $count < $limit; $count++) {
            $newArr[$count] = array_values($arr[$count]);
        }    
         
        $this->gettingUrl->getUrl($newArr, $url);
    }
}
