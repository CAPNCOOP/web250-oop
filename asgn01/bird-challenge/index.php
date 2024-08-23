<?php

class Bird
{
  public $commonName;
  public $food;
  public $nestPlacement;
  public $conservationLevel;

  public function song()
  {
    return $this->commonName === "Eastern Towhee" ? "drink-your-tea!" : "whatwhat!!";
  }

  public function canFly()
  {
    return "This bird can fly.";
  }

  public function displayDetails()
  {
    echo "Bird Details<br>";
    echo "Common Name: " . $this->commonName . "<br>";
    echo "Food: " . $this->food . "<br>";
    echo "Nest Placement: " . $this->nestPlacement . "<br>";
    echo "Conservation Level: " . $this->conservationLevel . "<br>";
    echo "Song: " . $this->song() . "<br>";
    echo "Can Fly: " . $this->canFly() . "<br>";
  }
}

$bird1 = new Bird;

$bird1->commonName = "Eastern Towhee";
$bird1->food = "Seeds, fruits, insects, spiders";
$bird1->nestPlacement = "Ground";
$bird1->conservationLevel = "Low";
$bird1->song();
$bird1->canFly();
echo "<br>";

$bird1->displayDetails();

$bird2 = new Bird;

$bird2->commonName = "Indigo Bunting";
$bird2->food = "Small seeds, berries, buds, and insects";
$bird2->nestPlacement = "Roadsides, and railroad rights-of-wafields and on the edges of";
$bird2->conservationLevel = "Low";
$bird2->song();
$bird2->canFly();
echo "<br>";

$bird2->displayDetails();
