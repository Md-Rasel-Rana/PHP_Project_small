<?php
  ////

//   $fname=array("Peter","Ben","Joe");
// $age=array("35","37","43");

// $c=array_combine($fname,$age);
// print_r($c);


// //// PHP array_filter() Function
// function test_odd($var)
//   {
//   return($var & 1);
//   }

// $a1=array(1,3,2,3,4);
// print_r(array_filter($a1,"test_odd"));



////PHP array_pop() Function
$a=array("red","green","blue");
array_pop($a);
print_r($a);

$sumarr=array(5,15,25);
echo array_sum($sumarr);