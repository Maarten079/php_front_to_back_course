<?php

#ARRAY - variable that holds multiple values
/*
 * Indexed
 * Associative
 * Multi-dimensional
 */

# INDEXED ARRAYS
$people = array('kevin', 'jeremy', 'sarah');
echo $people[1];

$ids = array(1, 2, 3);
echo $ids[2];

$cars = ['honda', 'toyota', 'ford'];
echo $cars[2];

// Add to array
$cars[3] = 'chevy';

// Add to last (unknown) index
$cars[] = 'BMW';

// Count
echo count($cars);

// Echo array
print_r($cars);

// Echo array + datatype
var_dump($cars);

# ASSOCIATIVE ARRAYS (key + value)
$people = array('brad' => 35, 'maarten' => 27, 'jose' => 32);
echo $people['brad'];

// Add to associative array
$people['jill'] = 42;
echo $people['jill'];
print_r($people);

# MULTI-DIMENSIONAL
$cars = array(
    array('Honda', 20, 10),
    array('Toyota', 30, 20),
    array('Ford', 23, 12),
);

echo $cars[1][0];
