<?php

/*
 * This is a Main class wich contains all the Controller's functionality
 */

class Engine {
    public $url;
    public function __construct() {

        $this->url = $_SERVER['REQUEST_URI'];
        if ($this->url !== '/'){
            $this->loadPage($_SERVER['DOCUMENT_ROOT']."/site/pages/".$_GET['page'].".php");
        }
        else {
            $this->loadPage($_SERVER['DOCUMENT_ROOT']."/site/pages/index.php");
        }
        
    }
    
    public function loadPage($url){
        include_once $url;
    }
    
}

?>
