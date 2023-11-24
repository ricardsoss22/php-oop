<?php

class Car {
  public $brand;
  public $milage;

  public function __construct($brand, $model) {
    $this->brand = $brand;
    $this->model = $model;

  }

  
  public function __destruct() {
      echo $this->brand . "is dead at mileage" . $this->mileage;

  }

  public function increaseMileage($amount){
      $this->mileage = $amount + $this->mileage;
  }
}
   