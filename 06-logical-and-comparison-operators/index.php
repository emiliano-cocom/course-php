<?php
    /* ------ comparison operators ------ */
    $a = 10;
    $b = 10;
    // equality ==
    $equality = $a == $b;
    // different != or <>
    $different = $a != $b;
    // is greater
    $isGreater = $a > $b;
    // is less
    $isLess = $a < $b;
    // is greater or equality
    $isGreaterOrEquality = $a >= $b;
    // is less or equiality
    $isLessOrEquality = $a <= $b;

    /* ------- logical operators ----- */
    $c = true;
    $d = true;
    // and &&
    /**
     * true && false = false
     * false && false = false
     * true && true = true
     */
    $and = $c && $d;
    
    // or ||
    /**
     * true || true = true
     * true || false = true
     * false || false = false
     */
    $or =  $c || $d;
?>