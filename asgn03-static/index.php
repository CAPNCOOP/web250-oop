<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>asgn03 Static</title>
</head>

<body>
  <h1>Inheritance Examples</h1>

  <?php
  include 'Bird.php';

  echo "Before using the create() method:<br>";
  echo "Bird instances: " . Bird::$instanceCount . "<br>";
  echo "Yellow-bellied Flycatcher instances: " . YellowBelliedFlyCatcher::$instanceCount . "<br>";
  echo "Kiwi instances: " . Kiwi::$instanceCount . "<br>";

  $bird1 = Bird::create();
  $bird2 = YellowBelliedFlyCatcher::create();
  $kiwi1 = Kiwi::create();

  echo "<br>After using the create() method:<br>";
  echo "Bird instances: " . Bird::$instanceCount . "<br>";
  echo "Yellow-bellied Flycatcher instances: " . YellowBelliedFlyCatcher::$instanceCount . "<br>";
  echo "Kiwi instances: " . Kiwi::$instanceCount . "<br>";

  echo "<br>Kiwi egg number: " . Kiwi::$eggNum . "<br>";

  ?>
</body>

</html>
