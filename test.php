<?php


interface testdrive{

function drive();
function stop();
}


class vehicle implements testdrive{

public $color;
public $num_doors;
public $price;
public $shape;
public $brand;

/*** the constructor ***/
public function __construct(){
  echo 'About this Vehicle: <br /><br/>';
}


/*** a method to show the vehicle price ***/
public function showPrice(){
	$this->price = 80000;
  echo 'This vehicle costs '.$this->price.'.<br />';
}

/*** a method to show the number of doors ***/
public function numDoors(){
	$this->num_doors = 2;
  echo 'This vehicle has '.$this->num_doors.' doors.<br />';
}

/*** method to drive the vehicle ***/
public function drive(){
  echo 'driver is driving<br/>';
}
/**
* a method to stop the car
*
* @access public
*
**/
public function stop(){
  echo 'driver stoped the car<br />';
}

} 



$object = new vehicle;

$object->numDoors();
$object->showPrice();
$object->drive();
$object->stop();
?>