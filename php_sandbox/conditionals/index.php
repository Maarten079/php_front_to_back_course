<?php
    # CONDITIONALS

    /*
     * ==
     * ===
     * <
     * >
     * <=
     * >=
     * !=
     * !==
     */

    $num = '5';
    if($num === 5) {
        echo "5 passed <br>";
    } else if($num < 10) {
        echo "5 passed <br>";
    } else {
        echo "did not pass <br>";
    }

    if($num == 5) {
        echo "5 passed <br>";
    }

    # NESTING IF
    if($num > 4) {
        if ($num < 10) {
            echo "num passed <br>";

        }
    }

    # LOGICAL OPERATORS

    /*
     * and &&
     * or ||
     * xor
     */

    if($num > 4 && $num < 10) {
        echo "succes <br>";
    }

    if($num > 4 XOR $num < 10) {
        echo "succes again! <br>";
    }

    # SWITCH

    $favColor = 'red';

    switch($favColor){
        case 'red':
            echo "My favorite color is red <br>";
            break;
        case 'blue':
            echo "My favorite color is blue <br>";
            break;
        default:
            echo "My favorite color is something else <br>";
            break;
    }