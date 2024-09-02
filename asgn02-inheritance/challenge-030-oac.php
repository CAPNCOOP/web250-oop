<?php

class Bicycle
{
  public $brand;
  public $model;
  public $year;
  public $description;
  private $weight_kg = 0.0;
  protected $wheels = 2;

  public function name()
  {
    return $this->brand . " " . $this->model . " (" . $this->year . ")";
  }

  public function wheel_details()
  {
    $wheel_string = $this->wheels == 1 ? "1 Wheel" : "{$this->wheels} wheels";
    return "It has " . $wheel_string . ".";
  }

  public function weight_kg()
  {
    return $this->weight_kg . ' kg';
  }

  public function set_weight_kg($value)
  {
    $this->weight_kg = floatval($value);
  }

  public function weight_lbs()
  {
    return floatval($this->weight_kg) * 2.2046226218;
  }

  public function set_weight_lbs($value)
  {
    $this->weight_kg = floatval($value) / 2.2046226218;
  }
}

class Unicycle extends Bicycle
{
  protected $wheels = 1;
}

$huffy = new Bicycle;
$huffy->brand = 'Huffy';
$huffy->model = 'ProSport';
$huffy->year = '2005';

$uni = new Unicycle;

echo "Bicycle: " . $huffy->wheel_details() . "<br>";
echo "Unicycle: " . $uni->wheel_details() . "<br>";

echo "Set weight using kg<br>";
$huffy->set_weight_kg(1);
echo $huffy->weight_kg() . "<br>";
echo $huffy->weight_lbs() . "<br>";

echo "Set weight using lbs<br>";
$huffy->set_weight_lbs(2);
echo $huffy->weight_kg() . "<br>";
echo $huffy->weight_lbs() . "<br>";
