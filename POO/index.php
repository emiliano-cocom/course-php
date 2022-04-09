<?php

    require_once('classes/Person.php');

    // instantiate class
    $person = new Person('JOSE', 'Cocom', 22);
    $person->setName('Emiliano');
    // $person->lastName = 'Cocom';
    // $person->age = 22;

    $personTwo = new Person('Elizabeth', 'Martinez', 19);
    // $personTwo->setName('Elizabeth');
    // $personTwo->lastName = 'Martinez';
    // $personTwo->age = 19;

    echo $person->getName();
    echo $personTwo->getName();
?>