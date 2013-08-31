<?php

/*
 * This is a Main class wich contains all the Controller's functionality
 */

//Подключаем View
include_once $_SERVER['DOCUMENT_ROOT']."/engine/View.php";

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
        
        //Создаем View. Определяем переменные
        $view = new View('/site/template/');
        $view->set('content', 'Это контент! Ура!');
        $view->set('menu', '');
        
        $view->display('template.html');
        
    }
    
    public function loadPage($url){
//        include_once $_SERVER['DOCUMENT_ROOT']."/site/parts/header.php";
//        include_once $_SERVER['DOCUMENT_ROOT']."/site/parts/horizontalMenu.php";
//        include_once $url;
//        include_once $_SERVER['DOCUMENT_ROOT']."/site/parts/footer.php";
    }
    
}

?>
