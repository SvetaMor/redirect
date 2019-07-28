<?php
namespace svetamor\redirect;

use svetamor\redirect\interfaces\IGettingUrl;
use svetamor\redirect\interfaces\IRedirect;

class GettingUrl implements IGettingUrl
{
    protected $redirect;
    
    public function __construct(IRedirect $redirect)
    {
        $this->redirect = $redirect; 
    }
    
    public function getUrl($arr, $url)
    {
        $newUrl = $url;
        $limit = count($arr);
      
        for ($count = 0; $count < $limit; $count++) {
            if ($arr[$count][0] === $url) {
                $newUrl = $arr[$count][1];
                $this->redirect->redirect($newUrl);
            }
        }    
    }
}
