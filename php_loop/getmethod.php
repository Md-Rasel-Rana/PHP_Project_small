<!-- 
 <html>
    <body>
       <form  method = "GET">
          Name: <input type = "text" name = "name" /> <br>
          Age: <input type = "text" name = "age" />
          <input type = "submit" /> <br>
       </form>
       
    </body>
 </html>  -->
 
 <?php
//    if( $_GET["name"] || $_GET["age"] ) {
//       echo "Welcome ". $_GET['name']. "<br />";
//       echo "You are ". $_GET['age']. " years old.";
      
//       exit();
//    }

   ?>


<!-- 
<html>
   <body>
   
      <form action = "<?php // $_PHP_SELF ?>" method = "POST">
         Name: <input type = "text" name = "name" /> <br>
         Age: <input type = "text" name = "age" /> <br>
         <input type = "submit" /> <br>
      </form>
   
   </body>
</html> -->
<?php
//    if( $_POST["name"] || $_POST["age"] ) {
//       if (preg_match("/[^A-Za-z'-]/",$_POST['name'] )) {
//          die ("invalid name and name should be alpha");
//       }
//       echo "Welcome ". $_POST['name']. "<br />";
//       echo "You are ". $_POST['age']. " years old.";
      
//       exit();
//    }
?>

<html>
<head>
<title>get_browser1</title>
<?php
error_reporting(1);
$x1=$_GET['f1'];
$y1=$_GET['s1'];
$z1=$x1+$y1;
echo "Sum of the two numbers = ".$z1;
?>
</head>
<body bgcolor="skyblue">
<form method="GET" >
<table border="2" bgcolor="green">
<tr>
<td>Enter the first number for input :: </td>
<td><input type="text" name="f1"/></td>
</tr>
<tr>
<td>Enter the second number for input :: </td>
<td><input type="text" name="s1"/></td>
</tr>
<tr align="center">
<td colspan="3" >
<input type="submit" value="submit"/></td>
</tr>
</table>
</form>
</body>
</html>