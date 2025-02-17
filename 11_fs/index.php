<?php
// Magic constants


echo __DIR__."<br>";
echo __FILE__."<br>";


echo __LINE__."<br>";

// Create directory
// mkdir("ayoub");

// Rename directory
// rename("ayoub3","ayoub33");

// Delete directory
// rmdir("ayoub33");
// Read files and folders inside directory

echo file_get_contents("lorem.txt");
// file_get_contents, file_put_contents
$files = scandir("../");

echo '<pre>';
var_dump($files);
echo '</pre>';


file_put_contents("sample.txt","some content");

// file_get_contents from URL

file_exists("sample.txt");
is_dir("text");

// https://www.php.net/manual/en/book.filesystem.php
// file_exists
// is_dir
// filemtime
// filesize
// disk_free_space
// file