<?php

require "connection.php";

try{
    $sql="SELECT * FROM utilisateurs";
    $pdoStatment=$pdo->query($sql);
    $users=$pdoStatment->fetchAll(PDO::FETCH_ASSOC);

   echo "<table border='1'> 
   <tr><th>ID</th> <th>NAME</th> <th>EMAIL</th></tr>";
    

    foreach($users as $user){
     echo "  <tr><td>{$user['id']}</td> <td>{$user['name']}</td> <td>{$user['email']}</td></tr>";

    }
}catch(PDOException $errors){

echo "errors : ".$errors->getMessage();
}




?>