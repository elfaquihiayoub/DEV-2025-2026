<?php

session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nom=$_POST["nom"]??"";
    $password=$_POST["password"]??"";
    if($nom=="admin"&&$password=="admin1234"){
        session_regenerate_id(true);
        $_SESSION["user"]=$nom;
        header("location: dashboard.php");
        exit;
    }else{
        $message="indentifient incorect";

    }


    
}



?>

<form method="POST">
    <label>Nom :</label>
    <input type="text" name="nom">
    <label>Mot de passe :</label>
    <input type="password" name="password">
    <button type="submit">Se connecter</button>
</form>

<?php if (!empty($message)) echo "<p style='color:red;'>$message</p>"; ?>