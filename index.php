<?php
include_once __DIR__."/config/config.php";
include_once __DIR__."/library/helper.php";

 //render('view/user/all.php');
if (isset($_GET['path'])){
    list($controller,$methode)=explode("/",$_GET['path']);

    $path=__DIR__."/controller/".$controller.".php";
    $request=$_REQUEST;
    $controller_path=file_exists($path);
    if ($controller_path){
        require $path;
        if (function_exists($methode)){
            $methode($request);
        }else{
            die("not found methode");
        }
    }else{
        die("not found controller");
    }
}




















