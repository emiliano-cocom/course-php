<?php
    /*------ break ----------- */
    for ($i=1; $i <= 20 ; $i++) { 
        if ($i == 11) {
            break;
        }
        echo $i.'<br>';
    }
    
    echo 'you got out loop';

    /*------- continue ------- */
    for ($i=1; $i <= 20 ; $i++) { 
        if ($i == 7) {
            continue;
        }
        echo $i.'<br>';
    }

    echo 'you got out loop';

    /*------- exit : close the program ------- */
    for ($i=1; $i <= 20 ; $i++) { 
        if ($i == 7) {
            exit();
            //die();
        }
        echo $i.'<br>';
    }
    
    echo 'you got out loop';
?>