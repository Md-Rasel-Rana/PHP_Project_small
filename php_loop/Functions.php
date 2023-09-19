<?php 
    ////PHP Functions
// function writeMsg() {
//     echo "Hello world!";
//   }
//   writeMsg(); // call the function
 


//         ////PHP Function Arguments
//     function familyName($fname) {
//        echo "$fname Refsnes.<br>";
//   }

//             familyName("Jani");
//             familyName("Hege");
//             familyName("Stale");
//             familyName("Kai Jim");
//             familyName("Borge");


//             function addFunction($num1, $num2) {
//                 $sum = $num1 + $num2;
//                 echo "Sum of the two numbers is : $sum";
//              }
             
//              addFunction(10, 20);


//              function addFive($num) {
//                 $num += 5;
//              }
             
//              function addSix(&$num) {
//                 $num += 6;
//              }
             
//              $orignum = 10;
//              addFive( $orignum );
             
//              echo "Original Value is $orignum<br />";
             
//              addSix( $orignum );
//              echo "Original Value is $orignum<br />";




            //  function addFunction($num1, $num2) {
            //     $sum = $num1 + $num2;
            //     return $sum;
            //  }
            //  $return_value = addFunction(10, 20);
             
            //  echo "Returned value from the function : $return_value";



            // function greet($name) {
            //     echo 'Hello '.$name.'!';
            //     return [$name, strtoupper($name), strlen($name)];
            //     echo 'Bye '.$name.'!';
            // }
            // list($name, $capital_name, $name_length) = greet('Monty');
            // echo 'Your name is '.$name.'.';
            // echo 'Your name is '.$capital_name.' in capitals.';
            // echo 'Your name is '.$name_length.' characters long.';



            // function day_date_time() {
            //     echo 'Today is '.date('l');
            //     echo 'The date is '.date('d F, Y');
            //     echo 'The time is '.date('h:i:s A');
            // }
            // day_date_time();
            // /* 
            // Today is Monday 
            // The date is 15 February, 2021 
            // The time is 03:11:17 PM 
            // */
            // function greeting_time($name, $time) {
            //     echo 'Good '.$time.', '.$name.'!';
            // }
            // greeting_time('Adam', 'morning');
            // // Good morning, Adam!




//             $word_a = 'apple';
// $word_b = 'mango';
// function v_palindrome($word) {
//     $word = $word.strrev($word);
//     return $word;
// }
// $palin_a = v_palindrome($word_a);
// echo $word_a;
// echo PHP_EOL;
// // apple 
// echo $palin_a;
// // appleelppa 
// function r_palindrome(&$word) {
//     $word = $word.strrev($word);
//     return $word;
// }
// $palin_b = r_palindrome($word_b);
// echo $word_b;
// // mangoognam 
// echo PHP_EOL;
// echo $palin_b;
// // mangoognam   


    // function maximum($x, $y) {
        
    //     if ($x > $y) { 
            
    //         return $x;
    //     } else {
            
    //         return $y;
    //     }
    // }

    // $a = 23;
    // $b = 32;

    // $val = maximum($a, $b);
    // echo "The max of $a and $b is $val \n";

            
    // function sum(...$nums) {
        
    //     $sum = 0;
        
    //     foreach ($nums as $n) {
    //         $sum += $n;
    //     }
        
    //     return $sum;
    // }

    // echo sum(1, 2, 3) . "\n";
    // echo sum(1, 2, 3, 4) . "\n";
    // echo sum(1, 2, 3, 4, 5) . "\n";


    // function info($name, $occupation) {

    //     return "$name is a $occupation";
    // }
    
    
    // echo info(name: 'John Doe', occupation: 'gardener') . "\n";
    // echo info(occupation: 'gardener', name: 'John Doe') . "\n";


?>