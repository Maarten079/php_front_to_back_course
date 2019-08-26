<?php
$path = '/dir1/myfile.php';

// Return filename
//    echo basename($path);

// Return filename without extension
//    echo basename($path, '.php');

// Return the directory name from path
//    echo dirname($path);

// Check if file exists
//    echo file_exists('file1.txt');

// Get abs path
//    echo realpath('file1.txt');

// Checks to see if file is file
//    echo is_file('file1.txt');

// Check if writeable
//    echo is_writeable('file1.txt');

// Check if readable
//    echo is_readable('file1.txt');

// Get file size
//    echo filesize('file1.txt');

// Make directory
mkdir('testing');

// Delete directory if empty
rmdir('testing');

// Copy a file
copy('file1.txt', 'file2.txt');

// Rename a file
rename('file2.txt', 'myfile.txt');

// Delete a file
unlink('myfile.txt');

// Write file contents to browser as string
//echo file_get_contents('file1.txt');

// Write a string to the file (replace contents)
//file_put_contents('file1.txt', ' Goodbye World');
//echo file_get_contents('file1.txt');

// Append to text in file
//$current = file_get_contents('file1.txt');
//$current .= ' Goodbye world';
//file_put_contents('file1.txt', $current);
//echo file_get_contents('file1.txt');

// Open file for reading
//$handle = fopen('file1.txt', 'r');
//$data = fread($handle, filesize('file1.txt'));
//echo $data;

// Open file for writing
$handle = fopen('file1.txt', 'w');
$txt = "John Doe\n";
fwrite($handle, $txt);
$txt = "Joanna Doe\n";
fwrite($handle, $txt);
fclose($handle);