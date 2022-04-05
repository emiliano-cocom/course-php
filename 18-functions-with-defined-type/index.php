<?php

declare(strict_types=1);

    // declare function
    function sumIntegers(int $integerOne, int $integerTwo): int | float
    {
        return ($integerOne + $integerTwo)/2;
    }

    $result = sumIntegers(6, 5);
    echo $result;
?>