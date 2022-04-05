<?php
    // 9! = 1*2*3*4*5*6*7*8*9
    
    function factorial($n) {
        $result = 1;

        for ($i=1; $i <= $n ; $i++) { 
            $result = $result * $i;
        }

        return $result;
        //echo "the factorial $n is: $result";
    }

    $result = factorial(6);
    echo "the factorial 6 is: $result";
    
?>