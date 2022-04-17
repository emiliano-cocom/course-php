<?php

    use folder1\Human;
    use folder2\Human as Human2;

    require_once('folder1/Human.php');
    require_once('folder2/Human.php');

    $humanObject = new Human;
    $humanObject->greeting();
    echo '<br>';
    $human2Object = new Human2;
    $human2Object->greeting();