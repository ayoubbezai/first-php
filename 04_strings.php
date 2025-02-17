<?php

// Create simple string
$string = 'ayoub';

echo "hello $string bezai"."<br>";
echo 'hello $string bezai'."<br>";
// String concatenation

// String functions
/*


strlen           string len
trim             remove spaces from both sides
ltrim rtrim      remove spaces from one side
str_word_count   the number of words in that string
strrev           reverse the string start from end
strtoupper       all the string to upper case
strtolower       all the string to lower case
ucfirst          uppercase the first char
lcfirst          lowercase the first char
ucwords          the first letter in each word is upper
strpos           the possition of given string in that str
stripos          same ignore the case
substr           cut the string
str_replace      replace the given word in the str
str_ireplace     same replacae the case



*/
// Multiline text and line breaks
$longText = "
    hello , my name is
    i am <b>20</b> years old
    I study cs
";

echo "1- ".$longText ."<br>";
echo "2- ".nl2br($longText)."<br>";
echo "3- ".htmlentities($longText)."<br>";
echo "4- ".nl2br(htmlentities($longText))."<br>";
echo html_entity_decode("i am &lt;b&gt;20&lt;/b&gt; years old");

//   i am &lt;b&gt;20&lt;/b&gt; years old


// Multiline text and reserve html tags



// https://www.php.net/manual/en/ref.strings.php
?>