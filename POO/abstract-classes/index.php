<?php

    abstract class AbstractClass
    {
        abstract protected function getValue();
        abstract public function prefixValue($prefix);

        public function printValue()
        {
            echo $this->getValue();
        }
    }

    class ConcreteClass extends AbstractClass
    {
        protected function getValue()
        {
            return 'concrete class';
        }

        public function prefixValue($prefix, $separator = '.')
        {
            return $prefix.' concrete class';
        }
    }

    $instanceConcreteClass = new ConcreteClass;
    $instanceConcreteClass->printValue();
    echo "<br>";
    echo $instanceConcreteClass->prefixValue('prefix');
?>