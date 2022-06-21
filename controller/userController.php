<?php
require_once __DIR__."/../boot/boot.php";

function index($request){
    if (isset($request['submit']))
        createUser($request);
    render("user/all");
}

function edit(){

}

function delete(){

}




