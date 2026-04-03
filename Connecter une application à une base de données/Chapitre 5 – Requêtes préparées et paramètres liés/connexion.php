<?php

$host="localhost";
$database="blogdb";
$user="root";
$password="";


try{
    $pdo=new PDO("mysql:host=$host;dbname=$database;charset=utf8",$user,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

   
}catch(PDOException $errors){
    echo "Connection error: " . $errors->getMessage();

}






?>