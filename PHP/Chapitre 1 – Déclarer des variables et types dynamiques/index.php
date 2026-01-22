<?php

// variable declaration
$nom='ayoub';
$age=20;
$IsStuding=true;
$result=19.44;


// shows

echo "le nom d etudion est :  " . $nom ."<br>";
echo "l age est : " .$age  ."<br>";
echo "is the steel studing ? " .($IsStuding ? "yes":"no")  ."<br>";
echo "his result is :" .$result  ."<br>";

echo gettype($age) ."<br>";

var_dump($nom);


// conversion 
$result_Int= (int)$result ."<br>";
echo "convertion est " .$result_Int."<br>"

?>