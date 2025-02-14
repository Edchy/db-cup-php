<?php 

$file = 'readme.txt';

if(file_exists($file)) {

echo readfile($file) . '<br>';

copy($file, 'copy.txt');

echo realpath($file) . '<br>';

echo filesize($file) . '<br>';

rename($file, 'text.txt');

} else {
  echo 'file does not exist';
}
mkdir(quotes);
//
// opening a file for reading
$handle = fopen($file, 'r');

// read the file
echo fread($handle, filesize($file));
?>