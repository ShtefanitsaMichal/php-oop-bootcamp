<?php 

class Person {

    public $name;
    public $age;

    public function __construct($name){
        
        $this-> name = $name;
    }
}

$michal = new Person("Michal Sztefanica");
$michal -> age = 28;
$michal -> age++;

var_dump($michal);
