<?php

class Instrument
{
  // Properties
  var $name;
  var $type;
  var $brand;
  var $price;

  // Constructor
  // public function __construct($name, $type, $brand, $price)
  // {
  //   $this->name = $name;
  //   $this->type = $type;
  //   $this->brand = $brand;
  //   $this->price = $price;
  // }

  // Methods
  public function displayDetails()
  {
    echo "Instrument Details<br>";
    echo "Name: " . $this->name . "<br>";
    echo "Type: " . $this->type . "<br>";
    echo "Brand: " . $this->brand . "<br>";
    echo "Price: " . $this->price . "<br>";
  }
}

// Instansiate 

// $guitar = new Instrument("Guitar", "Electric", "Les Paul", 1400.00);
// $guitar->displayDetails();

// $guitar2 = new Instrument("Guitar", "Electric", "Fender", 1700.00);
// $guitar2->displayDetails();

$guitar = new Instrument;

$guitar->name = "Guitar";
$guitar->type = "Acoustic";
$guitar->brand = "Les Paul";
$guitar->price = 6000.00;
echo "<br>";

$guitar->displayDetails();

$harmonica = new Instrument;

$harmonica->name = "Harmonica";
$harmonica->type = "C Major";
$harmonica->brand = "Hohner";
$harmonica->price = 200.00;
echo "<br>";

$harmonica->displayDetails();
