<?php
    $base = 2;
    $exp = 5;
    $result = 1;

    /*---- loop for ------ */
    for ($i=0; $i < $exp; $i++) { 
        $result = $result * $base;
    }

    echo "The value of $base raised to the power of $exp is: $result <br>";

    /*------- example - tree ---------*/
    $rows = 10;

    for ($i=1; $i <= $rows ; $i++) { 
        for ($j=1; $j < $i; $j++) { 
           echo '*';
        }
        echo '<br>';
    }

    /*------ loop foreach -------*/
    $names = ['Victor', 'Iris', 'Elizabeth', 'Joel'];

    foreach ($names as $key => $name) {
        echo "<br> $name is in the index $key";
    }

?>