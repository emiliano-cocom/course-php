<?php
    
    $a = 10;
    /*-------- switch -------- */
    switch ($a) {
        case '1':
            echo 'Lunes <br>';
            break;

        case '2':
            echo 'Martes <br>';
            break;

        case '3':
            echo 'Miercoles <br>';
            break;

        case '4':
            echo 'Jueves <br>';
            break;

        case '5':
            echo 'Viernes <br>';
            break;

        case '6':
            echo 'Sabado <br>';
            break;

        case '7':
            echo 'Domingo <br>';
            break;

        default:
            echo 'Invalid value <br>';
            break;
    }
    
    /*------- match -------- */
    echo match($a) {
        1 => 'Lunes <br>',
        2 => 'Martes <br>',
        3 => 'Miercoles <br>',
        4 => 'Jueves <br>',
        5 => 'Viernes <br>',
        6 => 'Sabado <br>',
        7 => 'Domingo <br>',
        default => 'Invalid value <br>'
    };

?>