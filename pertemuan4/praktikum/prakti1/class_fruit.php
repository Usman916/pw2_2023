<?php

    class Fruit {
        //Property
        public $name; 
        public $color;

        //method
        function getName(){
            return $this->name;
        }

        function getColor(){
            return $this->color;
        }
    }

    $apple = new Fruit();
    $apple->name = "apple";
    $apple->color = "Green";
    echo $apple->getName() . " " . $apple->getColor();
    
    
    echo "<br>";

    $banana = new Fruit();
    $banana->name = "Pisang";
    $banana->color = "Yellow";
    echo $banana->getName() . " " . $banana->getColor();
   
?>