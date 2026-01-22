<?php

$count=0;



function SayHi(){
    echo " hello <br>";
}


function addition($num1,$num2){
    $result= $num1 +$num2;
    echo " the result is : $result <br>";

}

function manualFill ($name = "member"){
    echo "welcome $name <br>";

}

function counting(){
    static $count=1;
    echo $count .'<br>';
    $count++;
}

// say hi call
SayHi();
// addition function
addition(5,10);
// manualfill function
manualFill();
// counting call function
counting();  //1
counting() ; //2
counting()   //3

?>