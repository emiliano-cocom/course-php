<?php

    class Person
    {
        public $name;
        public $firstLastName;
        public $secondLastName;
        public $age;

        // constructor
        /*
        public function __construct($name, $lastName, $age)
        {
            $this->name = strtolower($name);
            $this->lastName = strtolower($lastName);
            $this->age = $age;
        }
        */

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

        // setter
        public function setLastName($firstLastName, $secondLastName)
        {
            $this->firstLastName = $firstLastName;
            $this->secondLastName = $secondLastName;
        }

        // getter
        public function getLastName()
        {
            return $this->firstLastName." ".$this->secondLastName;
        }
    }


    // inheritance
    class Mexican extends Person
    {
        public $departament;
        public $city;

        // modify setter
        public function setLastName($firstLastName, $secondLastName)
        {
            parent::setLastName($firstLastName, $secondLastName);
            echo "surnames were assigned successfully";
        }
    }

    // inheritance
    class Peruvian extends Person
    {
        public $commune;
        public $region;

        // overwrite setter
        public function setLastName($firstLastName, $secondLastName)
        {
            $this->firstLastName = $secondLastName;
            $this->secondLastName = $firstLastName;
        }
    }