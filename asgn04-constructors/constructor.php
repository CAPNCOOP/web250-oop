<?php

class bird
{
  public $commonName;
  public $latinName;

  public function __construct($args = [])
  {
    $this->commonName = $args['commonName'] ?? NULL;
    $this->latinName = $args['latinName'] ?? NULL;
  }
}

$bird1 = new Bird(['commonName' => 'American Robin', 'latinName' => 'Turdus Migratorius']);
$bird2 = new Bird(['commonName' => 'Eastern Towhee', 'latinName' => 'Pipilo Erythrophthalmus']);
$bird3 = new Bird(['commonName' => 'Acadian Flycatcher', 'latinName' => 'Empidonax Virescens']);
$bird4 = new Bird(['commonName' => 'Carolina Wren', 'latinName' => 'Thryothorus Ludovicianus']);

echo "Common Name: " . $bird1->commonName . "<br>";
echo "Latin Name: " . $bird1->latinName;
echo "<hr>";
echo "Common Name: " . $bird2->commonName . "<br>";
echo "Latin Name: " . $bird2->latinName;
echo "<hr>";
echo "Common Name: " . $bird3->commonName . "<br>";
echo "Latin Name: " . $bird3->latinName;
echo "<hr>";
echo "Common Name: " . $bird4->commonName . "<br>";
echo "Latin Name: " . $bird4->latinName;
