
<?php
     // //Heres an example of implementing callback functions in PHP
     // //Callback function example
function callbackFunction($arg1, $arg2) {
   echo "Callback function called with arguments: $arg1, $arg2"."\n";
}

            // Function that accepts a callback
function performOperation($callback, $arg1, $arg2) {
   echo "Performing operation...."."\n";
   $callback($arg1, $arg2);
}

            // Using the callback function
performOperation('callbackFunction', 'Hello', 'World');



            // //Callback function example
     function callFunction($x,$y){
        echo "my first name $x and last name $y"."\n";

     }

     function anotherFunction($callback1, $x, $y){
        echo "my callback function call to here"."\n";
        $callback1($x, $y);
     }

     anotherFunction("callFunction", "Rasel" , "Rana");





      // //Callback function example
     function my_callback($item){
        return strlen($item);
      }
      
      $strings = ["apple", "orange", "banana", "coconut"];
      $lengths = array_map("my_callback", $strings);
      print_r($lengths);



   // //Callback function example
        function myfunction($num)
        {
        return($num*$num);
        }

        $myArray = array(1,2,3,4,5);
        print_r(array_map("myfunction",$myArray));


// //Callback function example
     function myfunctionCallback($v){

        if ($v==="Dog"){
        return "Fido";
        }
        return $v;

        }

        $array=array("Horse","Dog","Cat");
        print_r(array_map("myfunctionCallback", $array));



// //Callback function example

        function Callbackmyfunction($v1,$v2){
            if ($v1===$v2)
            {
            return "same";
            }
            return "different";
           }

    $a1=array("Horse","Dog","Cat");
    $a2=array("Cow","Dog","Rat");
    print_r(array_map("Callbackmyfunction",$a1,$a2));



    //filter people by gender
$people = [
    ['name'=>'A','gender'=>'M'],
    ['name'=>'B','gender'=>'M'],
    ['name'=>'C','gender'=>'F'],
    ['name'=>'D','gender'=>'F'],
    ['name'=>'E','gender'=>'M'],
];

function isMale($person){
    if($person['gender']=='M'){
        return true;
    }
    return false;
}

function isFemale($person){
    if($person['gender']=='F'){
        return true;
    }
    return false;
}

$males = array_filter($people, "isMale");
$females = array_filter($people, "isFemale");
print_r($females);



// //Callback function example
$numbers = [1,2,3,4,5,6,7,8,9,10,12];
isEven(1);
function isEven($n){
    if($n % 2 == 0){
        return true;
    }
    return false;
}
$evenNumbers = array_filter($numbers, "isEven");
print_r($evenNumbers);


    
$books = [
    ["id" => 1, "title" => "Harry Potter 1", "author" => "J.K. Rowling"],
    ["id" => 1, "title" => "Harry Potter 2", "author" => "J.K. Rowling"],
    ["id" => 2, "title" => "Lord of the Rings", "author" => "J.R.R. Tolkien"],
    ["id" => 3, "title" => "Catch-22", "author" => "Joseph Heller"],
    ["id" => 4, "title" => "Imaginary", "author" => "AB"],
];

function sortByAuthorName($book1, $book2){
    // return strcmp($book1['author'], $book2['author']);
    if(strlen($book1['author']) > strlen($book2['author'])){
        return -1;
    }elseif(strlen($book1['author']) < strlen($book2['author'])){
        return 1;
    }else{
        return 0;
    }
}

usort($books, "sortByAuthorName");
print_r($books);



//recursion 
//recursive function 
function factorial($n){
    if($n == 0){
        return 1;
    }
    return $n * factorial($n - 1);
}

//fibonacci 
// 0 1 1 2 3 5 8 13 21 34 55 89 144

    function nonRecursiveFactorial($n){
        $result = 1;
        for($i = $n; $i > 0; $i--){
            $result *= $i;
        }
        return $result;
    }

    $result = factorial(4);
    echo $result;


//callback function 

function add($x1, $x2)
{
    echo "Adding $x1 and $x2";
}
function divide($x1, $x2)
{
    echo "Dividing $x1 and $x2";
}
function process($n1, $n2, $cb)
{
    if (is_callable($cb)) {
        $cb($n1, $n2);
    }else{
        echo "Sorry, $cb is not callable";
    }
}

// process(10, 20, "add");
process(10, 20, "add");

$name = "John Doe"; //global variable

function greet(){
    $greetings = "Hi"; //local variable
    global $name; //this is how you use it
    echo "Hello $name"; 
}

function increament(){
    static $count = 0; //static variable
    $count++;
    echo $count;
}

?>
