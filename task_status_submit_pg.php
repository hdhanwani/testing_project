<?php
session_start();

if (isset($_SESSION['CurrentUser']))
{
 echo  $_SESSION['CurrentUser'] . "Your Employee ID is".$_SESSION['empid']." And This is your Profile ";
}

else 
{
 header ('location:http://localhost/testing_project/index.html');
}

//echo $_POST['select2'] ;

$con= mysqli_connect("localhost","root","3rdmarch","real_estate");
 //checking connection
 if (mysqli_connect_errno($con))
 {
  echo " error in connection with real_estate database:" . mysqli_connect_error();
  }
  
  if (isset($_POST['select2']))
  {
  
  mysqli_query($con,"update tasks set final_status='complete'
  where task_id ='".$_POST['select2']."'"); //or die("Error :".mysqli_error($con));
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<h1>"."The final status of the selected task is updated to complete "."</h1>" ;
 }
 
 else
 {
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<h1>"."YOU HAVENT SELECTED ANY TASK TO CHANGE STATUS"."</h1>" ;
 }

?>
<!--
<html>
<body>
<h1> The final status of the task is updated to complete </h1> 
</body>
</html>
-->

