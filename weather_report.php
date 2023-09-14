<html> 
<body>  
    
<form method="post">  

    <label for="#">
        Enter a value 
    </label>
    <input type="number" name="number1">  
    <br>
    <input type="submit" value="Submit">  
</form>  
</body>  
</html> 
<?php
if($_POST){
    $value=$_POST["number1"];
    if($value>20){
        echo "It's warm.";
    }
    else if($value>1){
        echo "It's cool";
    }
    else if($value<0){
        echo "It's freezing!";
    }
}