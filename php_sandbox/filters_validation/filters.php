<?php
/*

// Check if there is posted data with name data
if(filter_has_var(INPUT_POST, 'data')) {

    // Put the data in a variable
    $email = $_POST['data'];

    // Remove illegal chars (sanitize)
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    // Filter for email
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo 'data valid ';
    } else {
        echo 'data not valid ';
    }
} else {
    echo 'data not found ';
}

*/

// Integer validation
$var = '23';

if (filter_var($var, FILTER_VALIDATE_INT)) {
    echo "$var is an integer";
} else {
    echo "$var is not an integer";
}

// Sanitize a number
$number = 'k2345k5k3hj5hb153hvj1v34';
var_dump(filter_var($number, FILTER_SANITIZE_NUMBER_INT));

// Array of filters
$filters = array(
    "data" => FILTER_VALIDATE_EMAIL,
    "data2" => array(
        "filter" => FILTER_VALIDATE_INT,
        "options" => array(
            "min_range" => 1,
            "max_range" => 100
        )
    )
);

print_r(filter_input_array(INPUT_POST, $filters));

$arr = array(
    "name" => "brad traversy",
    "age" => "24",
    "email" => "brad@gmail.com"
);

$filters2 = array(
    "name" => array(
        "filter" => FILTER_CALLBACK,
        "options" => "ucwords"
    ),
    "age" => array(
        "filter" => FILTER_VALIDATE_INT,
        "options" => array(
            "min_range" => 1,
            "max_range" => 120
        )
    ),
    "email" => FILTER_VALIDATE_EMAIL
);

print_r(filter_var_array($arr, $filters2));
?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="data">
    <input type="text" name="data2">
    <button type="submit">Submit</button>
</form>