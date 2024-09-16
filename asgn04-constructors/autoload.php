<?php

function my_autoload($class)
{
  if (preg_match('/\A\w+\Z/', $class)) {
    include 'classes/' . $class . '.class.php';
  }
}
spl_autoload_register('my_autoload');

$bird5 = new Bird;
$bird5->commonName = 'Acadian Flycatcher';
echo $bird5->commonName;
