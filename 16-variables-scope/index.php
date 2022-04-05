<?php
    // example one
    // global variable
    $a = 5;

    function test()
    {
        // local variable
        $b = 6;
        // access global variable
        global $a;
        $a = 10;
    }

    test();
    echo "$a <br>";

    // example two
    $c = 5;
    $d = 10;

    // get complete variable &
    function sum(&$n)
    {
        $n = $n + 10;
    }

    sum($c);
    sum($d);

    echo "$c <br> $d";
?>