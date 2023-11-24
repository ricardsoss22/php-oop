<?php

class bird {
    public $color;
    private $age;

   //konstruktors
    public function __construct ($c, $a) {
        $this->color = $c;
        $this->age = $a;
    }


    public function __destruct() {
        echo $this->color . "is dead";
    }



    //ieksa metode ir funkcija
    public function fly() {
        echo "fly away" . $this->color . "Bird<br>";
    }

}