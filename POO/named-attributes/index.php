<?php

    class Human
    {
        // avalible on version 8
        // create an assigment values in constructor
        public function __construct(public $name, public $motherLastName, public $fatherLastName, public $dni)
        {
            
        }

        public function setName($name)
        {
            $this->name = $name;
            return $this;
        }

        public function setLastName($fatherLastName, $motherLastName)
        {
            $this->fatherLastName = $fatherLastName;
            $this->motherLastName = $motherLastName;
            return $this;
        }

        public function setDni($dni)
        {
            $this->dni = $dni;
            return $this;
        }

        public function printData()
        {
            echo 'Name: '.$this->name.'<br>';
            echo 'Father LastName: '.$this->fatherLastName.'<br>';
            echo 'Mother LastName: '.$this->motherLastName.'<br>';
            echo 'DNI: '.$this->dni.'<br>';
        }
    }

    // instantiate class Human
    // named attributes
    $objecHuman = new Human(name:'José', motherLastName:'Xool', fatherLastName:'Cocom', dni:'5363737366');
    $objecHuman->printData();