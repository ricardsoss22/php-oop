<?php

include "Dog.php";
include "Cat.php";
include "Bird.php";
include "Car.php";




$myBird = new Bird("black", 541);
$myBird->color = "black";
echo $myBird->color . "<br>";
$myBird->fly();

$myBird2 = new Bird("Blue", 0,5);
$myBird2->color = "Blue";
$myBird2->fly();

$myDog = new Dog;
$myDog2 = new Dog;
$myDog->color = "Black";


$car1 = new Car("bmw", 2000);
$car2 = new Car("audi", 40);
$myCar->increaseMileage(240);

$myDog2 = new Car;
$myDog->color = "red";





$cats = [];
for ($i = 0; $i < 21; $i++) {
  array_push($cats, new Cat);
}