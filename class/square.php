<?php
  class Square extends Shape{
    /**
    * Uses the parents class constructor.
    * @param $diameter
    * @return void
    */
    function __construct($diameter){
      parent::__construct($diameter);
    }

    /**
    * Shows the circle area.
    * @return float
    */
    function getArea(){
      $diameter = $this->getDiameter();

      return $diameter * $diameter;
    }
  }
?>
