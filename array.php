<?php

//// PHP Arrays

// $cars1 = array("Volvo", "BMW", "Toyota");
// print_r($cars1);
// echo $cars1[0];
//  /* First method to create array. */
// $cars2 = array("Volvo", "BMW", "Toyota");
// echo "I like " . $cars2[0] . ", " . $cars2[1] . " and " . $cars2[2] . ".";

//  //array for loop in array
// $numbers = array( 1, 2, 3, 4, 5);
// for($x=0; $x<count($numbers); $x++){
//     echo "$numbers[$x]";
// }
//   //array for each loop in array

// foreach($numbers as $value){
//     echo " Number is = $value";
// }

// //// PHP Associative Arrays cteate 
// $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
// echo "Peter is " . $age['Peter'] . " years old.";

//  foreach($age as $x=> $value){
//     echo "Key=" . $x . ", Value=" . $value;
//     echo "<br>";
//  }



//  /* First method to associate create array. */
//  $salaries = array("mohammad" => 2000, "qadir" => 1000, "zara" => 500);
         
//  echo "Salary of mohammad is ". $salaries['mohammad'] . "<br />";
//  echo "Salary of qadir is ".  $salaries['qadir']. "<br />";
//  echo "Salary of zara is ".  $salaries['zara']. "<br />";
 
//  /* Second method to create array. */
//  $salaries['mohammad'] = "high";
//  $salaries['qadir'] = "medium";
//  $salaries['zara'] = "low";
 
//  echo "Salary of mohammad is ". $salaries['mohammad'] . "<br />";
//  echo "Salary of qadir is ".  $salaries['qadir']. "<br />";
//  echo "Salary of zara is ".  $salaries['zara']. "<br />";



//  $marks = array( 
//     "mohammad" => array (
//        "physics" => 35,
//        "maths" => 30,	
//        "chemistry" => 39
//     ),
    
//     "qadir" => array (
//        "physics" => 30,
//        "maths" => 32,
//        "chemistry" => 29
//     ),
    
//     "zara" => array (
//        "physics" => 31,
//        "maths" => 22,
//        "chemistry" => 39
//     )
//  );
 
//  /* Accessing multi-dimensional array values */
//  echo "Marks for mohammad in physics : " ;
//  echo $marks['mohammad']['physics'] . "<br />"; 
 
//  echo "Marks for qadir in maths : ";
//  echo $marks['qadir']['maths'] . "<br />"; 
 
//  echo "Marks for zara in chemistry : " ;
//  echo $marks['zara']['chemistry'] . "<br />"; 



//  $cars = array (
//     array("Volvo",22,18),
//     array("BMW",15,13),
//     array("Saab",5,2),
//     array("Land Rover",17,15)
//   );
//  print_r( $cars[2]);
    
//   echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
//   echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
//   echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
//   echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

// $myarr=array("Name"=>"Peter","Age"=>"41","Country"=>"USA");
// print_r(array_values($myarr));
// echo PHP_EOL;

// $a=array("a"=>"red","b"=>"green","c"=>"red");
// print_r(array_unique($a));
// echo PHP_EOL;

// $a1=array_fill(3,4,"blue");
// print_r($a1);


  ?>

