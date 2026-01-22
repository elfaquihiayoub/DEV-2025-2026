<?php

// if statement

$count_jour_desEmprunt=25;
$jour="";


if($count_jour_desEmprunt>30 ){
    echo "you passed the emprunt limite !!!";
}
elseif ($count_jour_desEmprunt>20) {
    echo "you are in your last emprunt days!";
}

else{
    echo "enjoy your read and dont surpass the limite ";

}


// switch statement 

switch($jour){
    case "lundi":
        echo "first day of the week";
        break;
    
    case "vendredi":
        echo "lest day of the week"  ;
        
    default:
    echo "normal day ";    
}









?>