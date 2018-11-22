<?php
    class Task {
        public $description, $title;
        public $completed = false;

        public function __construct($name, $surname,  $description){
            $this -> description  = $description;
            $this -> surname = $surname;
            $this -> name = $name;
        }

        public function complete(){
            $this -> completed = true;
        }
    }


   $task = new Task("Michał ", "Sztefancia \n", "Pracownik IT \n");

   echo $task -> name;
   echo $task -> surname;
   echo $task -> description;
   

?>