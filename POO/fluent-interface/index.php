<?php

    class Human
    {
        public $name, $motherLastName, $fatherLastName, $dni;

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
    $objecHuman = new Human;
    $objecHuman->setName('José')
                ->setLastName('Cocom', 'Xool')
                ->setDni('893938373')
                ->printData();