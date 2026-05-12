<?php
require 'database.php';
$db = (new Database())->getConnection();

//select methode:
$stmt=$db->query("SELECT * FROM users");
$listOfUsers=$stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($listOfUsers as $user) {
    echo $user['name'] . " - " . $user['email'] . "<br>";
}

// add methode 

$sql='INSERT INTO users(name,email) VALUES (:name,:email)';
$stmt=$db->prepare($sql);
$stmt->execute([
    "name"=>"brahim",
    "email"=>"brahim-test@gmail.com"
]);


//update methode

$stmt=$db->prepare("UPDATE users SET name=:name , email=:email WHERE id=:id");
$stmt->execute([
    "name"=> "brahim2",
    "email"=>"brahim2@gmail.com",
    "id"=> 5
]);

// delete methode 

$stmt=$db->prepare("DELETE FROM users WHERE id=:id");
$stmt->execute(["id"=>2]);




