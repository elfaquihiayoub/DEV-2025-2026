<?php

$host="localhost";
$database="blogdb";
$user="root";
$password="";

try{
    $pdo= new PDO("mysql:host=$host;dbname=$database;charset=utf8",$user,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $pdo->query("SELECT * FROM INXISTE ");
    
}catch(PDOException $errors){
   file_put_contents("errors", $errors->getMessage(),FILE_APPEND);
   echo "there is a problem in connection , contace te support !!!";

}






?>