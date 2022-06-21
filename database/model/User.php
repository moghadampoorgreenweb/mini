<?php
//require_once

function createUser($request){

    extract($request);
    global $db_Conection;

    $sql="INSERT INTO `users`
    ( `firstName`, `lastName`, `email`, `password`, `phoneNumber`, `status`, `created_at`) 
    VALUES (:firstName,:lastName,:email,:password,:phoneNumber,:status,:created_at)";
    $stmnt=$db_Conection->prepare($sql);
    $stmnt->bindParam(':firstName',$firstName);
    $stmnt->bindParam(':lastName',$lastName);
    $stmnt->bindParam(':email',$email);
    $password_hash=md5($password);
    $stmnt->bindParam(':password',$password_hash);
    $stmnt->bindParam(':phoneNumber',$phoneNumber);
    $stmnt->bindParam(':status',$status);
    $ceated_at=date("Y/m/d h:i:s");
    $stmnt->bindParam(':created_at',$ceated_at);
    $stmnt->execute();
}




