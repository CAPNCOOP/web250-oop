<?php

class bird
{
  public $commonName;
  public $latinName;

  public function __construct($commonName, $latinName)
  {
    $this->commonName = $commonName;
    $this->latinName = $latinName;
  }
}

$bird1 = new Bird('American Robin', 'Turdus Migratorius');
$bird2 = new Bird('Eastern Towhee', 'Pipilo Erythrophthalmus');

echo "Common Name: " . $bird1->commonName . "<br>";
echo "Latin Name: " . $bird1->latinName;
echo "<hr>";
echo "Common Name: " . $bird2->commonName . "<br>";
echo "Latin Name: " . $bird2->latinName;
