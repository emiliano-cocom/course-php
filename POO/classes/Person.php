<?php

    class Person
    {
        public $name;
        public $lastName;
        public $age;

        // constructor
        public function __construct($name, $lastName, $age)
        {
            $this->name = strtolower($name);
            $this->lastName = strtolower($lastName);
            $this->age = $age;
        }

        // setter
        public function setName($name)
        {
            $this->name = strtolower($name);
        }

        // getter
        public function getName()
        {
           return ucwords($this->name);
        }
    }