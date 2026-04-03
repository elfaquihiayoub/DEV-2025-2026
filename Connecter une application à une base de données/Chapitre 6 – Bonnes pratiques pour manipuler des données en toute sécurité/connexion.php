<?php

$host="localhost";
$database="blogdb";
$user="root";
$password="";


try{
    $pdo=new PDO("mysql:host=$host;dbname=$database;charset=utf8",$user,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

   
}catch(PDOException $errors){
      file_put_contents('logs/errors.log', $e->getMessage(), FILE_APPEND);
    echo "Une erreur est survenue. Contactez l’administrateur.";

}






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ajout_utilisateur_secure.php" method="post">
        <input type="text" placeholder="name" name="name">
        <input type="text" placeholder="email" name="email">
        <button type="submit">send</button>
        


    </form>
</body>
</html>