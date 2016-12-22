<?php
  class factory {
    /**
    * Creates a shape.
    * @param $shape string
    * @param $diameter float
    * @return object
    */
    function create($shape, $diameter){
      if ($shape == 'circle') {
        return new circle($diameter);
      } else {
        return new square($diameter);
      }
    }
  }
?>
