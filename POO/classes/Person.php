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


    // traits
    trait LatinAmerican
    {
        public function greetingLatinAmerican()
        {
            echo 'this is a greeting latin american';
        }
    }

    trait UnitedKingdom
    {
        public function greetingUnitedKingdom()
        {
            echo 'this is a greeting united kingdom';
        }
    }

    trait A 
    {
        public function greeting()
        {
            echo "Hello from trait A";
        }
    }

    trait B 
    {
        protected function greeting()
        {
            echo "Hello from trait B";
        }

        abstract public function converse();
    }

    // inheritance
    class Mexican extends Person
    {
        use LatinAmerican;

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
    class English extends Person
    {
        use UnitedKingdom, A, B {
            B::greeting insteadOf A;
            B::greeting as public;
        }

        public $commune;
        public $region;

        // overwrite setter
        public function setLastName($firstLastName, $secondLastName)
        {
            $this->firstLastName = $secondLastName;
            $this->secondLastName = $firstLastName;
        }

        public function converse()
        {
            echo "I am a english and you ?";
        }
    }