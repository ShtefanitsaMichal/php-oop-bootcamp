<?php 

class Person {

    private $name;
    private $age;

    public function __construct($name){
        
        $this-> name = $name;
    }

    public function getAge(){
        return $this -> age * 365 ;
    }

    public function setAge($age){

        if ($age < 18) {
            throw new Exception("Pearson is not old enough");
        }
        $this->age=$age;
    }
}

$michal = new Person("Michal Sztefanica");

$michal -> setAge(30);
$michal -> age = 3;


var_dump($michal -> getAge());
