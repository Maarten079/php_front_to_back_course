<?php

# LOOPS

/*
    For
    While
    Do..While
    Foreach
*/

// For
for ($i = 0; $i < 10; $i++) {
    echo $i;
}
echo '<br>';

// While
$i = 0;

while ($i < 10) {
    echo $i;
    $i++;
}
echo '<br>';

// Do While
$i = 0;

do {
    echo $i;
    $i++;
}

while($i < 10);
echo '<br>';

// Foreach
$people = array('brad', 'maarten', 'jose', 'william');

foreach($people as $person) {
    echo "$person ";
}
echo '<br>';

// Foreach with associative array
$people = array('brad' => 1, 'maarten' => 2, 'jose' => 3, 'william' => 4);

foreach($people as $person => $id) {
    echo "$person $id ";
}

