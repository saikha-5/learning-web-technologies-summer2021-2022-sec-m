<?php
  $length;
  $width;

  function area($length, $width){
      $area=$length*$width;
      echo "The area of the circle is $area";
  }
  function perimeter($length, $width){
      $perimeter= 2*($length+$width);
      echo "The perimeter of the circle is $perimeter";
  
  }
  area(12,23);
  perimeter(12,23);
?>