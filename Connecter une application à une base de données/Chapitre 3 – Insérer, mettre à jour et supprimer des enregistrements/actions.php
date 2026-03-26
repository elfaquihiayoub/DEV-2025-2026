<?php
require 'connection.php';

try{
    // adding a row
   $pdoStatment=$pdo->prepare("INSERT INTO utilisateurs (name,email) VALUES(:name ,:email)");
   $pdoStatment->execute([
    'name'=>"ayoub elfaquhi",
    'email'=> "ana@gmail.com"
   ]);
   echo "user added succefuly"; 

    //updating a row
    $pdoStatment=$pdo->prepare("UPDATE utilisateurs SET email = :email WHERE id = :id");
    $pdoStatment->execute([
        'email'=> "changedemail@gmail.com",
        "id"=>"1"
    ]);
    echo" user updated succefuly";

    // deleting a row
    $pdoStatment=$pdo->prepare("DELETE FROM utilisateurs WHERE id = :id");
    $pdoStatment->execute([
        "id"=>'1'
    ]);
     echo" user deleted succefuly";

}catch(PDOException $err){
    echo "the errors : " . $err;

}


?>