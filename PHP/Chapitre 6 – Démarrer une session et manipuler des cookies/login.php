<?php

session_start();
if ($_SERVER["REQUEST_METHOD"]==="POST") {

$nom= trim($_POST["nom"]);
    if(!empty($nom)){
        $_SESSION["user"]=$nom;
        setcookie("user",$nom,time()+7200,"/");
        header('location: profil.php');
        exit;

    }else{
        $message="the name should not be empty";

    }
    
}
?>

<form method="POST">
    <label>Nom :</label>
    <input type="text" name="nom">
    <button type="submit">Se connecter</button>
    
</form>
<?php if (!empty($message)) {
    echo "<p style=color: red;>$message</p>";
};