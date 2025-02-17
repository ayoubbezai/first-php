<?php

// while

// Loop with $counter

// do - while

// for

// foreach

// Iterate Over associative array.

$person = [
    "name"=> "ayoub",
    "surName"=> "bezai",
    "age"=> 20,
    "hobbies" =>["sports","video games"]
];

foreach($person as $key => $value){
    if(is_array($value)){
        echo $key ." ".  implode(",",$value)."<br>";
    }else{
        echo $key ." ".  $value."<br>";
    }
}