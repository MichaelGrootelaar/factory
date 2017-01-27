<?php
  abstract class Shape {
    /**
    * The width & height of the shape.
    * @var float
    */
    private $diameter;

    /**
    * Sets the width & height of the shape.
    * @param $diameter float
    * @return void
    */
    function setDiameter($diameter){
      $this->diameter = $diameter;
    }
    /**
    * Gets the width & height of the shape.
    * @return float
    */
    function getDiameter(){
      return $this->diameter;
    }

    /**
    * Constructs the shape.
    * @param $diameter
    * @return void
    */
    function __construct($diameter){
      $this->setDiameter($diameter);
    }
  }
?>
