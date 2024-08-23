<?php

class Bicycle
{
  var $brand;
  var $model;
  var $year;
  var $description;
  var $weight_kg = 0.0;

  function name()
  {
    return $this->brand . " " . $this->model . " (" . $this->year . ")";
  }

  function weight_lbs()
  {
    return floatval($this->weight_kg) * 2.2046226218;
  }

  function set_weight_lbs($value)
  {
    $this->weight_kg = floatval($value) / 2.2046226218;
  }
}

$huffy = new Bicycle;
$huffy->brand = 'Huffy';
$huffy->model = 'ProSport';
$huffy->year = '2005';
$huffy->weight_kg = 5.0;

$mg = new Bicycle;
$mg->brand = 'Mongoose';
$mg->model = 'EZtrick';
$mg->year = '2014';
$mg->weight_kg = 4.0;

echo $huffy->name() . "<br>";
echo $mg->name() . "<br>";

echo $huffy->weight_kg . "<br>";
echo $huffy->weight_lbs() . "<br>";

$huffy->set_weight_lbs(2);
echo $huffy->weight_kg . "<br>";
echo $huffy->weight_lbs() . "<br>";
