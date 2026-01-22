<?php
// for loop

for ($i=1; $i < 5 ; $i++) {
    echo " lap number ".$i ."<br>";
    
}
// while loop

$iteration=0;
while ($iteration <= 10) {
    echo "lap " .$iteration ."<br>";
    $iteration++;
}


// foreach loop


$days=["lunes","martes","miercoles","jueves","viernes","sabado","domingo"];
echo "los dias del simana son : <br>";
foreach($days as $dia){
    echo " $dia .<br>";
};



for ($i=0; $i < 12; $i++) { 

    if($i==4){
        continue;
    };
    if($i==9){
        break;
    };
    echo "num : $i <br>" ;
}






?>