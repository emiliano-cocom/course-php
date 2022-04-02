<?php
    $a = 5;
    $b = 3;

    echo 'firts paragraph <br>';
    if($a < $b) {
        echo 'second paragraph <br>';
    }else {
        echo 'edited second paragraph <br>';
    }
    echo 'third paragraph <br>';

    if($a > $b) {
        echo 'the value of a is greater than the value of b';
    }elseif($a < $b) {
        echo 'the value of b is less than the value of a';
    }else {
        echo 'the value of a is the same as the value of b';
    }
?>