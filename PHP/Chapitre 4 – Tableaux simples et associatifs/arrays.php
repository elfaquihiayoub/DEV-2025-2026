<?php 
// simple array:

$dias=["lunes","martes","miercoles","jueves","viernes","sabado","domingo"];
// assosiative array
$users=[
    $user1=[
    "nom" => "ayoub elfaquihi",
    "email" => "ayoub@test.com",
    "age" => 20,
    "password"=>"ayoub@test"
    ],
    $user2=[
        "nom" => "brahim lbatal",
        "email" => "brahim@test.com",
        "age" => 23,
        "password"=>"brahim@test"
    ],
    $user3=[
        "nom" => "monir lmo2assis",
        "email" => "mo2asis@test.com",
        "age" => 20,
        "password"=>"monir@test"
    ]
    ];


// delete and adding items
unset($users[1]);
array_push($users,$user4=[
    "nom" => "alae motawirTi9niya",
    "email" => "alae@test.com",
    "age" => 20,
    "password"=>"alae@test"
]);
// shows methodes

//    1
print_r($users) ."<br>";

print_r($dias) ."<br>";

//  2

foreach($dias as $dia){
    echo "dia : $dia  <br>" ;
}

foreach($users as $key=> $values){
    echo " user $key <hr>";
        foreach($values as $type => $value){
            echo " $type  :   $value  <hr>";


        };
}

 echo "the number of days are " .count($dias);


    


?>
