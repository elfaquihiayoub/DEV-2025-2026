<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" placeholder="name">
        <input type="text" name="email" placeholder="email">
        <button type="submit">send</button>
        

    </form>
    
</body>
</html>



<?php
$errors=[];
if($_SERVER['REQUEST_METHOD']==="POST"){
    $name=htmlspecialchars(trim($_POST["name"]));
    $email=htmlspecialchars(trim($_POST['email']));
    if(empty($name)){
        $errors[]="name is required";
    }
    if(empty($email)){
        $errors[]="email is required";
    }else{
        if(!filter_var($name,FILTER_VALIDATE_EMAIL)){
        $errors[]="EMAIL ISNT VALIDE !!!!";
    }
    }
    
    if(empty($errors)){
          echo "<p style='color:green;'>Formulaire envoyé avec succès !</p>";
    }else{
       
    echo "<ul style='color:red;'>";

    foreach ($errors as $error) {
        echo "<li>$error</li>";
    }
    echo "</ul>";
}
    

}

?>