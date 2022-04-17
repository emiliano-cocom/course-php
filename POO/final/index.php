<?php

    // if put final to class, this not inheritance
    class Home
    {
        public $color, $security;

        // if put final a method, this not overwrite
        final public function greeting()
        {
            echo "Welcome to home";
        }
    }

    class Departament extends Home
    {
        /*
        public function greeting()
        {
            echo "Welcome to Departament";
        }
        */
    }

    $departamentObject = new Departament;
    $departamentObject->greeting();