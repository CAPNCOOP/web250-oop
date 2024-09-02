<?php

class Camera
{
  public $name;
  public $brand;
  public $type;

  public function describe()
  {
    return "This is a {$this->brand}, {$this->name}, {$this->type} camera.";
  }
}

class Dslr extends Camera
{
  public $hasMirror;

  public function describe()
  {
    return parent::describe() . " It captures pictures digitally on the sensor using a mirror.";
  }
}

class Mirrorless extends Camera
{
  public $noMirror;
  public function describe()
  {
    return parent::describe() . " It captures pictures digitally on the sensor without the use of a mirror.";
  }
}

$canon = new Dslr();
$canon->name = '1DXIII';
$canon->brand = 'Canon';
$canon->type = 'DSLR';


$sony = new Mirrorless();
$sony->name = 'A7IV';
$sony->brand = 'Sony';
$sony->type = 'Mirrorless';

echo $canon->describe() . '<br>';
echo $sony->describe() . '<br>';
