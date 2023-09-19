<?php
//recursion 
//recursive function 
// function factorial($n){
//     if($n == 0){
//         return 1;
//     }
//     return $n * factorial($n - 1);
// }
// $result = factorial(4);
// echo $result;

//fibonacci 
// 0 1 1 2 3 5 8 13 21 34 55 89 144



// for($x=1; $x<10; $x++){
//     if($x%2 == 0){
//         echo " even: $x"."\n";
        
//     }else{
//         return true ;
//     }
   
  
// }

// for($i=1;$i<=10;$i++){
   
    
// }

// function FiboNacciSeries($n)
// {
//  $number1 = 0;  //0 1 1 2 3 4 5 6 7 8 9 10
//  $number2 = 1;

//  echo "Fibonacci Series \n";
//  echo $number1.' '.$number2.' ';
//  for($i = 0; $i < $n; $i++){
//    $number3 = $number1 + $number2; // 0+1=1
//    echo $number3.' ';
//    $number1 = $number2;
//    $number2 = $number3;
//    }
// }
// FiboNacciSeries(10);

// static method here 
function mystatic(){
   static $i;
   $i= $i ?? 0;
   $i++;
   echo $i;
   echo "\n";
}
mystatic();
mystatic();
mystatic();
mystatic();
mystatic();
mystatic();

// static method here 
function add1() {
  static $number = 0;
  $number++;
  return $number;
}

echo add1();
echo "<br>";
echo add1();
echo "<br>";
echo add1();