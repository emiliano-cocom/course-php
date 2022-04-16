<?php

    // interfaces are like templates    
    interface a
    {
        public function test();
    }

    interface b
    {
        public function test2();
    }

    // multiple inheritance
    interface c extends a, b
    {
        public function test3();
    }

    class d implements c 
    {
        public function test()
        {

        }

        public function test2()
        {

        }

        public function test3()
        {

        }

        public function test4()
        {
            
        }
    }

    
?>