<?php

    # FUNCTION

    /*
     *  Camel Case - myFunction()
     *  Pascal Case - MyFunction()
     *  Lower Case - my_function()
     */

    # User defined functions

    // Create a function
    function simpleFunction() {
        echo 'Hello World';
    }

    // Call a function
    simpleFunction();

    echo '<br>';

    // Create a function with arguments and default
    function sayHello($name = 'World') {
        echo "Hello $name";
    }

    // Call function with argument
    sayHello('Maarten');

    echo '<br>';

    // Return value with function
    function addNumbers($num1, $num2) {
        return $num1 + $num2;
    }

    // Call function with return value
    echo addNumbers(1, 2);

    echo '<br>';

    # PASSING ARGUMENT BY REFERENCE
    $myNum = 10;

    // Won't manipulate number
    function addFive($number) {
        $number += 5;
    }

    // Will manipulate number
    function addTen(&$number) {
        $number += 10;
    }

    addFive($myNum);

    echo "Value: $myNum<br>";

    addTen($myNum);

    echo "Value: $myNum<br>";

