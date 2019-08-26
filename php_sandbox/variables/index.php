<?php
# Single line comment
// Also single line comment

/*
 * Multi
 * Line
 * Comment
 */

// Display text fast
echo 'hello world';

// Display text slow
print 'hello world';

$output = 'hello world';

echo $output;

# VARIABLES
/*
 * Prefix $
 * Start with letter or an underscore
 * Only letters, numbers and underscores in var names
 * Case sensitive
 */

# DATA TYPES

// Strings
$output = 'hello world';
echo $output;

// Integers
$output = 1;
echo $output;

// Floats
$output = 1.3;
echo $output;

// Boolean
$output = true;
echo $output;

// NULL
$output = null;
echo $output;

// Resource (reference to function)

# COMBINING
$num1 = 1;
$num2 = 10;
$num3 = $num1 + $num2;
echo $num3;

# CONCAT
$string1 = 'hello ';
$string2 = 'world';
echo $string1 . $string2;
echo "$string1 $string2!";

# ESCAPE CHARACTERS
$string3 = 'They\'re here';

# CONSTANTS (true for case insensitive)
define('GREETING', 'Hello everyone', true);
echo greeting;