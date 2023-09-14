<html>
<head>
<title>Temperature Converter</title>
</head>
<body>
<h5>Temperature Converter</h5>
<form  method="post">
<input type="radio" name="units" value="C">Celcius
<input type="radio" name="units" value="F">Farenheit <br>
<input type="number" name="temperature">
<input type="submit" name="submit" value="CONVERT"><br>
</form>
<?php
if(isset($_POST['submit']))
{
 $temperature=$_POST['temperature'];
 $units =$_POST['units'];
if($units=="C")
{
$result=$temperature*9/5+32;
echo "$temperature degree Celcius = " .$result . " degree Farenheit";
}
else
{
$result=($temperature-32)*5/9;
echo "$temperature degree Farenheit = " .$result . " degree Celcius";
}
}
?>
</body>
</html> 