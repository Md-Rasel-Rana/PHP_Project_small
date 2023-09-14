<html> 
<body>  
    
<form method="post">  

    <label for="#">
    Enter a 1st Number 
    </label>
    <input type="number" name="number1">  
    <label for="#">
        Enter a 2nd Number 
    </label>
    <input type="number" name="number2">  
    <br>
    <input type="submit" value="Submit">  
</form>  
</body>  
</html> 
<?php
if($_POST){
    $number1=$_POST["number1"];
    $number2=$_POST["number2"];
    $result= ($number1>$number2)?"$number1 number is greater than $number2":"$number2 is greater than $number1";
   echo $result;
}