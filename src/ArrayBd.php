<?php
namespace svetamor\redirect;

use svetamor\redirect\interfaces\AbstractArray;
use yii\db\Query;

class ArrayBd extends AbstractArray
{
    public function getArr($url)
    {
       $arr = (new Query())
            ->select(['currUrl','newUrl'])
            ->from($this->filePath)
            ->all();
        
        $limit = count($arr);
        
        for ($count = 0; $count < $limit; $count++) {
            $newArr[$count] = array_values($arr[$count]);
        }    
         
        $this->gettingUrl->getUrl($newArr, $url);
    }
}
