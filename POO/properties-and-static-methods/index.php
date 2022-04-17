<?php

    class Human
    {
        // static properties and methods belong exclusively to the class
        public static $name = 'Jose Cocom';

        public static function greeting()
        {
            echo "Hello, how are you?";
        }

        // access static properties using self
        public function personalizedGreeting()
        {
            echo "Hello ".self::$name;
        }
    }

    class Mexican extends Human
    {
        // access inheritance static properties using parent
        public function mexicanGreeting()
        {
            echo "Hello from México ".parent::$name;
        }
    }

    // access static properties and methods
    Human::greeting();
    echo '<br>';
    echo Human::$name;
    echo '<br>';

    // instantiate class Human
    $objecHuman = new Human;
    $objecHuman->personalizedGreeting();
    echo '<br>';

    // instantiate class Mexican
    $objectMexican = new Mexican;
    $objectMexican->mexicanGreeting();