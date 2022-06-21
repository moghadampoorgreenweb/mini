<?php
include_once __DIR__."/../config/config.php";

function render($url){
    if (file_exists(BASE_URL."view/".$url.".php")){
      echo  include_once BASE_URL."view/".$url.".php";
      die();
    }
    echo false;
}







