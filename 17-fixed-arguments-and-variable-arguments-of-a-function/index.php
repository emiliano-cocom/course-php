<?php
    // fixed arguments
    function assessment($name, $rating = 5)
    {
        echo "the $name has a rating of $rating <br>";
    }

    assessment('Course PHP 8', 6);

    // variable arguments
    function concat(...$words)
    {
        $result = '';
        foreach($words as $key => $word) {
            $result .= $word.' ';
        }
        echo $result;
    }

    concat('Course', 'PHP', '8');
?>