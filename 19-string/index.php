<?php
    $string = 'aeioui';

    // print one character
    echo $string[1].'<br>';
    // print size bits to string
    echo strlen($string).'<br>';
    // print size to string
    echo mb_strlen($string).'<br>';
    // print key of character return first match
    echo strpos($string, 'i').'<br>';
    // print key of character return last match
    echo strrpos($string, 'i').'<br>';

    $stringTwo = 'Hello world, how are you?';

    // print true or false if string contains string
    echo str_contains($stringTwo, 'world').'<br>';
    // print true or false if string start with string
    echo str_starts_with($stringTwo, 'Hello').'<br>';

    $a = 'Prueba';
    $b = 'prueba';

    if (strcmp($a, $b) == 0) {
        echo 'the two strings are equal <br>';
    } else {
        echo 'the two strings are different <br>';
    }

    if (strcasecmp($a, $b) == 0) {
        echo 'the two strings are equal <br>';
    } else {
        echo 'the two strings are different <br>';
    }

    $c = 'Hello world';
    
    // get string from index
    echo substr($c, 1).'<br>';
    // get string from index start and end 
    echo substr($c, 1, 6).'<br>';
    // get last part of string
    echo substr($c, -2).'<br>';
    // get string from index end and start 
    echo substr($c, -5, 3).'<br>';
    // replace world on string
    echo str_replace('world', 'José', $c).'<br>';
    // convert string to lower
    echo strtolower($c).'<br>';
    // convert string to upper
    echo strtoupper($c).'<br>';
    // convert string uc first word
    echo ucfirst($c).'<br>';
    // convert string uc words 
    echo ucwords($c).'<br>';

?>