<?php 
    require_once 'controller/ProdutoController.php';
    require_once 'Home.php';
     

    if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['metodo'])){
        $metodo = $_POST['metodo'];
        $classe = $_POST['classe'].'controller';
        $control = new $classe();
        $control->$metodo();
    }
    else {
        if($_SERVER['REQUEST_METHOD']==='GET' && @$_GET['metodo']===NULL && @$_GET['classe'] === NULL){
            $class = new Home();
            $class->menu();
        }
        else{
        $classe = $_GET['classe'].'Controller';
        $metodo = $_GET['metodo'];
        $control = new $classe();
        $control ->$metodo();
        }
    }