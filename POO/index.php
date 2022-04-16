<?php

    require_once('classes/Person.php');

    // instantiate class
    $person = new Person('JOSE', 'Cocom', 22);
    $person->setName('Emiliano');
    // $person->lastName = 'Cocom';
    // $person->age = 22;

    $personTwo = new Person('Elizabeth', 'Martinez', 19);
    $personTwo->setName('Elizabeth');
    // $personTwo->lastName = 'Martinez';
    // $personTwo->age = 19;

    echo $person->getName().'<br>';
    echo $personTwo->getName().'<br>';

    // inheritance

    $mexican = new Mexican;
    $mexican->setName('Jose');
    $mexican->setLastName('Martinez', 'Lopez');
    echo '<br>';

    $english = new English;
    $english->setLastName('Martinez', 'Lopez');
    $english->greetingUnitedKingdom();
    echo '<br>';
    $english->greeting();
    echo '<br>';
    $english->converse();
    echo '<br>';
    echo $mexican->getLastName().'<br>';
    echo $english->getLastName().'<br>';

    var_dump($mexican);
    echo '<br>';
    var_dump($english);
?>