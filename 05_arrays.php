<?php

// Create array
$fruits = ["banana", "apple","orange"];


// Print the whole array
echo '<pre>';
var_dump($fruits);
echo '</pre>';



// Get element by index

echo $fruits[2]."<br>";


// Set element by index

$fruits[0]= "peach";

echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Check if array has element at index 2

isset($fruits[2]);//true

// Append element
$fruits[]= "banana";

echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Print the length of the array
echo count($fruits);

// Add element at the end of the array

array_push($fruits,"hi");

echo '<pre>';
var_dump($fruits);
echo '</pre>';
// Remove element from the end of the arra

array_pop($fruits);

echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Add element at the beginning of the array

array_unshift($fruits,"new fruite");

echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Remove element from the beginning of the array
 array_shift($fruits);

 
echo '<pre>';
var_dump($fruits);
echo '</pre>';


// Split the string into an array
$string = "hello,world,php";


echo '<pre>';
var_dump(explode(",",$string));
echo '</pre>';


// Combine array elements into string

echo implode(" ",$fruits);


// Check if element exist in the array


echo '<pre>';
var_dump(in_array("apple",$fruits));
echo '</pre>';

// Search element index in the array

echo '<pre>';
var_dump(array_search("apple",$fruits));
echo '</pre>';

// Merge two arrays

$veg = ["Potatao","cucumber"];

$mergedArray = [...$veg,...$fruits];

//or use array_merg and pass both arrrays
 
echo '<pre>';
var_dump($mergedArray);
echo '</pre>';

// Sorting of array (Reverse order also)
sort($fruits);

echo '<pre>';
var_dump($fruits);
echo '</pre>';

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array

$person = [
    "name"=> "ayoub",
    "surName"=> "bezai",
    "age"=> 20,
    "hobbies" =>["sports","video games"]
];

echo '<pre>';
print_r($person);
echo '</pre>';

// Get element by key

echo $person["name"];

// Set element by key

$person["adress"] = "batna , aod";

echo '<pre>';
print_r($person);
echo '</pre>';

// Null coalescing assignment operator. Since PHP 7.4
//instande we do the long if and isset 

$person["gender"] ??="unknown";


echo '<pre>';
print_r($person);
echo '</pre>';


// Check if array has specific key

// Print the keys of the array

echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';

// Print the values of the array

echo '<pre>';
var_dump(array_values($person));
echo '</pre>';

// Sorting associative arrays by values, by keys

ksort($person);

echo '<pre>';
print_r($person);
echo '</pre>';

// Two dimensional arrays
$todos = [
    ["title"=> "to do Title1 ","completed"=> true,"length"=>23,],
    ["title"=> "to do Title2 ","completed"=> false,"length"=>3,],
    ["title"=> "to do Title3  ","completed"=> true,"length"=>333,],
];

echo '<pre>';
print_r($todos);
echo '</pre>';














?>