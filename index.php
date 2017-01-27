<?php
  require_once('class/shape.php');
  require_once('class/circle.php');
  require_once('class/square.php');
  require_once('class/factory.php');

  $factory = new Factory();

  // main code
  $circle = $factory->create('square', 3);
  $circleArea = $circle->getArea();

  echo $circleArea;

  echo '<br>';

  $square = $factory->create('square', 3);
  $squareArea = $square->getArea();

  echo $squareArea;
?>
