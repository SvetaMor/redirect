<?php
namespace svetamor\redirect\interfaces;

use svetamor\redirect\interfaces\IGettingUrl;

abstract class AbstractArray
{
    protected $gettingUrl;
    public $filePath;
    
    public function __construct(IGettingUrl $gettingUrl)
    {
        $this->gettingUrl = $gettingUrl; 
    }
    
    abstract public function getArr($url);
}
