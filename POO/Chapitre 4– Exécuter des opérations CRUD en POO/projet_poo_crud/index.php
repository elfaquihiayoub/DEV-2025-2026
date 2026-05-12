<?php
require "database.php";
require "user.php";

$database=new database();
$dbconc=$database->getConnection();


$user =new user($dbconc);
$user->name="yassin";
$user->email="yassin-test@gmail.com";
$user->create();


$list =$user->read();
foreach ($list as $u){
    echo "<ul>";
    echo "<li>" .$u['name'] . " --" . $u["email"]." </li>";
    echo "</ul>";

}


