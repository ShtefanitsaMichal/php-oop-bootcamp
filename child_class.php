<?php

    class Person {
        protected $name;

        public function __cunstruct($name){
            $this -> name = $name; 
        }
    };

    class Business {

        protected $staff; 

        public function __cunstruct(Staff  $staff)
        {
            $this -> staff = $staff;
        }

        public function hire(Person  $person)
        {
            $this -> staff -> add($person);
        }
    };

    class Staff {
        protected $members = []; 

        public function add(Person $person)
        {
            $this -> members[] = $person;
        }
    };

    $jeffrey = new Person('Jefrey White');

    $staff = new Staff;

    $laracast = new Business($staff);

    $laracast -> hire($jeffrey);

    var_dump($staff);
?>