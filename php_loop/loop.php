<?php   
// loop detail here 
 echo(((20 + 5) * 3) / 4);
 for($x=0; $x<=100; $x++){
    echo "Bangladesh"."\n";
 }

         //for loop here 
for ($x = 0; $x <= 10; $x+=10) {
    echo "The number is: $x <br>";
  }
  10 plus to $x+10


  // while loop here 
  while($i <= 3){
   $i++;
   echo "The number is " . $i . "<br>";
}


     //do while loop here 
$i = 1;
do{
    $i++;
    echo "The number is " . $i . "<br>";
}
while($i <= 3);

  // foreach loop here 
 $colors = array("red", "green", "blue", "yellow");
foreach ($colors as $value) {
  echo "$value <br>";
}

$myarray = array(
   "name" => "Peter Parker",
   "email" => "peterparker@mail.com",
   "age" => 18
);
// Loop through superhero array
  foreach($myarray  as $key => $value){
   echo $key . " : " . $value . "<br>";
      }

$animals_list = array("Lion","Wolf","Dog","Leopard","Tiger");

foreach($animals_list as $array_values){

echo $array_values . "<br>";

}



         //
$persons = array("Mary" => "Female", "John" => "Male", "Mirriam" => "Female");

foreach($persons as $key => $value){

echo "$key is $value"."<br>";
}


$array = array( 1, 2, 3, 4, 5);
         
foreach( $array as $value ) {
   if( $value == 3 )continue;
   echo "Value is $value <br />";
}

         //PHP Break and Continue

         for ($x = 0; $x < 10; $x++) {
            if ($x == 4) {
              break;
            }
            echo "The number is: $x <br>";
          }

         for ($x = 0; $x < 10; $x++) {
            if ($x == 4) {
              continue;
            }
            echo "The number is: $x <br>";
          }





  ?>




