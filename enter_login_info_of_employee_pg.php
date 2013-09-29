<?php
session_start();


if (isset($_SESSION['CurrentUser']))
{
 echo  $_SESSION['CurrentUser'] . " This is your Profile ";
}

else 
{
 header ('location:http://localhost/testing_project/index.html');
}
$con =mysqli_connect("localhost","root","3rdmarch","real_estate");
$sql=mysqli_query($con,"select max(emp_id) as maxem from employees;") or die("Error :".mysqli_error($con));
$maxem=0;
if ($row=mysqli_fetch_array($sql)) {
	$maxem=$row['maxem'];
}
?>

<html>
<body>
<br><br><br><br>
<form name="login_info" action="http://localhost/testing_project/login_info_submit_pg.php" method="post">
Username: <input type="text" name="username"><br>
Password: <input type="password" name="passwd"><br>
<?php echo"Emp_ID :<input type=\"text\" name=\"emp_id\" value=\"$maxem\" readonly><br>"; ?>
Dept ID:<input type="text" name="dept_id" value="1" readonly><br>
Position ID:<input type="text" name="position_id" value="1" readonly><br>
Secret Question:<Input type="text" name="secret_question"><br>
Secret Answer:<input type="text" name="secret_answer"><br><br>
<input type="submit" value="submit">
</form>
</html>
</body>
