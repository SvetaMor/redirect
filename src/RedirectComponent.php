<?php
namespace svetamor\redirect;

use yii\base\Component;

class RedirectComponent extends Component{ 
   
    private $filePath;
    private $currUrl;
   
    public function init()
    {
        $this->currUrl =  $_SERVER['REQUEST_URI'];
       
        //редирект из файла 
        //$this->filePath = '/files/redirect.csv';
        //ArrayCsv::getArr($this->filePath, $this->currUrl);
       
        //редирект из БД
        $this->filePath = 'redirect';
        ArrayBd::getArr($this->filePath, $this->currUrl);
    }
} 
