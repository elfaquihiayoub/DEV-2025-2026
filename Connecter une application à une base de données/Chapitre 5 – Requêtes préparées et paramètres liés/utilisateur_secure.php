<?php

require "connexion.php";


try{
    // adding a row using bind parametre
    $name="ayoub";
    $email="ayoub@gmail.com";

    $pdoStatment=$pdo->prepare("INSERT INTO utilisateurs(name,email) VALUES(:name,:email)");
    $pdoStatment->bindParam(":name",$name);
    $pdoStatment->bindParam(":email",$email);
    $pdoStatment->execute();


    $pdoStatment2=$pdo->prepare("SELECT * FROM utilisateurs WHERE email = :email");
    $pdoStatment2->bindValue(":email","bob@test.com");
    $pdoStatment2->execute();
    $user=$pdoStatment2->fetch(PDO::FETCH_ASSOC);
    echo "Nom : " . $user['name'];
}
catch(PDOException $err){
    echo "the errors : " . $err;

}




?>