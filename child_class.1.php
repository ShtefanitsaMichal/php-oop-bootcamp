<?php
    


    class Person {
         protected $name; // 

         public function __cunstruct(){
             $this->name = $name; 
         }
    }


    class Business 
    {

        protected $staff;

        public function __cinstruct(Staff $staff)
        {
            $this -> staff = $staff;
        }

        public function hire(Person $person)
        {
            $this -> staff->add($person);
        }

       
    }

    class Staff 
    {
        protected $members = [];

        public function add(Person $person){

            $this->members[] = $person;
        }
    }

    $michal = new Person('Michał Sztefanica');

    $staff = new Staff();

    $laracast = new Business($staff);
    
    $laracast->hire(michal);

    var_dump($staff);


 ?>
