<?php

class Bird
{
  public $habitat;
  public $food;
  protected $nesting = "tree";
  public $conservation;
  public $song = "chirp";
  protected $flying = "yes";

  public static $instanceCount = 0;
  public static $eggNum = 0;

  public function __construct()
  {
    static::$instanceCount++;
  }

  public static function create()
  {
    return new static();
  }

  protected function canFly()
  {
    if (static::$flying == "yes") {
      $flyingString = "bird can fly";
    } else {
      $flyingString = " cannot fly and it stuck on the ground";
    }
    return $flyingString;
  }

  public function layEgg()
  {
    static::$eggNum++;
  }
}

class YellowBelliedFlyCatcher extends Bird
{
  public $name = "yellow-bellied flycatcher";
  public $diet = "mostly insects.";
  public $song = "flat chilk";
}

class Kiwi extends Bird
{
  public $name = "kiwi";
  public $diet = "omnivorous";
  protected $flying = "no";
  public static $eggNum = "3-4, sometimes 5.";
}
