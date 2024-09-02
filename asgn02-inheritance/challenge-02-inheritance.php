<?php

class Camera
{
  private $name;
  private $brand;
  private $type;

  public function setName($name)
  {
    $this->name = $name;
  }

  public function setBrand($brand)
  {
    $this->brand = $brand;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getBrand()
  {
    return $this->brand;
  }

  public function getType()
  {
    return $this->type;
  }

  public function describe()
  {
    return "This is a {$this->getBrand()}, {$this->getName()}, {$this->getType()} camera.";
  }
}

class Dslr extends Camera
{
  private $hasMirror = true;

  public function describe()
  {
    return parent::describe() . " It captures pictures digitally on the sensor using a mirror.";
  }
}

class Mirrorless extends Camera
{
  private $hasMirror = false;
  public function describe()
  {
    return parent::describe() . " It captures pictures digitally on the sensor without the use of a mirror.";
  }
}

$canon = new Dslr();
$canon->setName('1DXIII');
$canon->setBrand('Canon');
$canon->setType('DSLR');

$sony = new Mirrorless();
$sony->setName('A7IV');
$sony->setBrand('Sony');
$sony->setType('Mirrorless');

echo $canon->describe() . '<br>';
echo $sony->describe() . '<br>';
