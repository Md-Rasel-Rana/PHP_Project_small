
<html> 
<body>  
    
<form method="post">  

    <label for="#">Bangla</label>
    <input type="number" name="number1">  
    <br>
    <label for="#">Math</label>
    <input type="number" name="number2">  
    <br>
    <label for="#">English </label>
    <input type="number" name="number3"> 
    <br> 
    <input type="submit" value="Submit">  
</form>  
</body>  
</html> 



<?php
if($_POST){
  $number1 = $_POST["number1"];
  $number2 = $_POST["number2"];
  $number3 = $_POST["number3"];
  $sum = $number1+$number2+$number3;
  $total=$sum/3;
   echo " Average Number:  $total ";
   if($total>=80 && $total<100){
    echo "Grade is: A";
   }
   else if($total>=70 && $total<79){
    echo "Grade is: B";
   }
  else  if($total>=60 && $total<69){
    echo "Grade is: C";
   }
   else if($total>=50 && $total<59){
    echo "Grade is: D";
   }
  else if($total>=1 && $total<33){
    echo "Grade is: F";
   }
}






















?>