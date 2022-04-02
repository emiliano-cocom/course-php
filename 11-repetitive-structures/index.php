<?php
    $i = 1;

    /*---------- loop while ------- */
    while ($i < 10) {
        echo "$i Hello world <br>";
        $i++;
    }

    echo 'you are out of the loop while <br>';

    /*--------- loop do while ------ */
    $j = 10;

    do {
        echo "$j Hello world <br>";
        $j++;
    } while ($j < 10);

    echo 'you are out of the loop do while <br>';

    /*-------- example ---------------- */
    $base = 10;
    $exp = 3;

    $result = 1;
    $i = 1;

    while ($i <= $exp) {
        $result = $result * $base;
        $i++;
    }

    echo "The value of $base raised to the power of $exp is: $result";
?>