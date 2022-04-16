<?php

    class MyClass
    {
        public $public = 'Public'; // can be accessed from anywhere
        protected $protected = 'Protected'; // can be accessed from the class and those that inherit from it
        private $private = 'Private'; // can only be accessed from the class itself

        function printProperty()
        {
            echo $this->public.'<br>';
            echo $this->protected.'<br>';
            echo $this->private.'<br>';
        }
    }

    class MyClass2 extends MyClass
    {
        public $public = 'Public 2';
        protected $protected = 'Protected 2';

        // overwrite function
        function printProperty()
        {
            echo $this->public.'<br>';
            echo $this->protected.'<br>';
        }
    }

    $objectMyClass2 = new MyClass2;
    $objectMyClass2->printProperty();

?>