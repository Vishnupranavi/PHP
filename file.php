<?php 
//return the file name
$path='/dir1/myfile.php';
$file='file1.txt';
echo basename($path);
//return filename without extension
echo "\n";
echo basename($path,'.php');
//return dirname from path
echo "\n";
echo dirname($path);
//check for file
echo "\n";
echo file_exists('file2.txt');//returns 0 or 1
//get abs path
echo "\n";
echo realpath($file);
//checks to see if file
echo "\n";
echo is_file($file);
//checks for readable
echo "\n";
echo is_writable($file);
//checks for only readable
echo "\n";
echo is_readable($file);
//filesize
echo "\n";
echo filesize($file);
//create a directory
echo "\n";
mkdir('file3');
//delete a directory
echo "\n";
rmdir('file3');
//copy a file
echo "\n";
echo copy('file1.txt','file4.txt');
//rename
echo "\n";
rename('file1.txt','myfile.txt');
//delete a file**
//unlink('myfile.txt');
//write from file to string
echo file_get_contents('myfile.txt');//Hai pranavi
//write string to file
echo file_put_contents($file,'welcome');
//$current is used to dispay current contents
$current=file_get_contents('myfile.txt');
$current.='PHP is WOW';
echo file_put_contents($file,$current);
//open a file to read
$handle=fopen($file,'r');
$data=fread($handle,filesize($file));
echo ($data);
//write to a file
$handle=fopen('file2.txt','w');
$text="aspire family\n";
echo "\n";
fwrite($handle,$text);
$text=" welcomes you";
fwrite($handle,$text);

//to close a file
fclose($handle);
?>