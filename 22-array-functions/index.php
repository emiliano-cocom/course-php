<?php

    $array = [1,2,3];

    // list function
    list($a, $b, $c) = $array;
    echo $b.'<br>';

    // range function
    $numbers = range(10, 20);

    // count function
    echo count($numbers).'<br>';

    $names = ['Victor', 'Pamela', 'Elizabeth', 'Iris'];

    // delete a element of array
    unset($names[2]);

    // search a elemento of array
    if (in_array('Elizabeth', $names)) {
        echo 'it is found in array';
    } else {
        echo 'is not found in array';
    }    

?>