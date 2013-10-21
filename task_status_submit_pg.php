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
 
 else if (isset($_POST['select3']))
  {
  
  mysqli_query($con,"update tasks set final_status='need more info'
  where task_id ='".$_POST['select3']."'"); //or die("Error :".mysqli_error($con));
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<h1>"."The final status of the selected task is updated to need more info "."</h1>" ;
 }
 
 else if (isset($_POST['select4']))
  {
  
  mysqli_query($con,"update tasks set final_status='still on it'
  where task_id ='".$_POST['select4']."'"); //or die("Error :".mysqli_error($con));
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<h1>"."The final status of the selected task is updated to still on it "."</h1>" ;
 }
 
 else
 {
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<h1>"."YOU HAVENT SELECTED ANY TASK TO CHANGE STATUS"."</h1>" ;
 }

?>

<html>
<body>
<br><br><br>
<a href="lead_rep_pg.php">Go Back to Main Page</a>
</body>
</html>
<!--
<html>
<body>
<h1> The final status of the task is updated to complete </h1> 
</body>
</html>
-->

