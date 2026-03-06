<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location: login.php');

}
else{
     echo "<h1>Bienvenue " . $_SESSION['user'] . " !</h1>";
     echo "<a href='logout.php'>Se déconnecter</a>";
}


?>
