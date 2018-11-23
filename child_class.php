<?php

    abstract class Shape{
        protected $color;

        public function __construct($color = "red")
        {

        }

        public function getColor()
        {
            return $this->color; 
        }
    }

    class Square extends Shape{

        protected $length = 4; 

        public function GetArea(){
            return pow($this -> length, 2); 
        }
        
    }

    class Triangle extends Shape{

        protected $base = 4;
        protected $height = 7; 

        public function GetArea(){
        return .5*$this->base*$this->hight;
        }
        
    }

    class Circle extends Shape{
        Protected $radius = 12;

        public function GetArea(){
            return M_PI * pow($this->radius, 2);
        }
    }

    $circle = new Circle;

    echo $circle->GetArea();
    echo "\n"
 
 ?>