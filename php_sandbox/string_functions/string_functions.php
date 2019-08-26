<?php

# substr
// Returns a portion of a string
$output = substr('hello', 1, 2);

// Negative also possible
$output = substr('hello', -2);

# strlen()
// Returns the length of a string
$output = strlen('Hello World');

# strpos()
// Finds the position of the first occurrence of a sub-string
$output = strpos('find in me', 'i');

# strrpos()
// Finds the position of the last occurence of a sub-string
$output = strrpos('find in me', 'i');

# trim()
// Strips whitespace
/*
$string= 'hello world                        ';
var_dump($string);
$string = trim($string);
var_dump($string);
echo $output;
*/

# strtoupper()
// Makes everything uppercase
$output = strtoupper('Hello World');

# strtolower()
// Makes everything lowercase
$output = strtolower('HELLO WORLD');


# ucwords()
// Capitalize every word
$output = ucwords('hello world');

# str_rteplace()
// Replace all occurrences of a search string with a replacement

$text = 'Hello World';
$output = str_replace('Hello', 'Goodbye', $text);

# is_string()
// Checks if string, returns nothing if not
$val = 'test';
$output = is_string($val);

# gzcompress()
// compress a string

$string = 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA';

$compressed = gzcompress($string);

# gzuncompress()
$uncompressed = gzuncompress($compressed);
echo $uncompressed;