<?php

// What is a variable

// Variable types


/*
string "23" 3
integer
float // double
boolean
Null
array
object
resource
*/


// Declare variables

$name = "ayoub";
$age = 12;
$isMale = false;// false nothing true 1
$heigth = 2.34;
$salary = null;// null nothing




// Print the variables. Explain what is concatenation

echo "name: ". $name."<br>";
echo "age: ".$age."<br>";
echo "gender: ".$isMale ."<br>";
echo "height: ".$heigth ."<br>";
echo "salery: ".$salary ."<br>";

// Print types of the variables

echo gettype($name)."<br>";
echo gettype($age)."<br>";
echo gettype($isMale)."<br>";
echo gettype($heigth)."<br>";
echo gettype($salary)."<br>";

// Print the whole variable

var_dump($name);
var_dump($age);
var_dump($isMale);
var_dump($heigth);
var_dump($salary);

// Change the value of the variable

$name = true;
echo "name: ". $name."<br>";


// Print type of the variable

var_dump($name);


// Variable checking function

is_string($name);//false
is_bool($name);//true


// Check if variable is defined

isset($name);//true
isset($address);//false

// Constants
define("pi",3.14);
echo pi;
// Using PHP built-in constants
?>