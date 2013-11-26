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
<head>
<link rel="stylesheet" type="text/css" href="index.css">
<h1> Business Leads Management System &copy;</h1>
	<table align="center">
		<th><p>Project by : Hitesh Dhanwani</p></th>
		<th><p>E-mail: <a href="mailto:hdhanwani@gmail.com">hdhanwani@mail.fresnostate.edu.</a></p></th>
	</table>
<title> DHANWANI&copy; </title>

</head>

<body>
<br><br><br><br>
<form name="login_info" action="http://localhost/testing_project/login_info_submit_pg.php" method="post">
<table align="center">
<tr>
<th>Username:-</th>
<td><input type="text" name="username"><br></td></tr>
<tr>
<th>Password:-</th> 
<td><input type="password" name="passwd"><br></td></tr>
<tr>
<?php echo"<th>Emp_ID :-</th><td><input type=\"text\" name=\"emp_id\" value=\"$maxem\" readonly><br></td></tr>"; ?> 
<tr>
<th>Dept ID:-</th>
<td><input type="text" name="dept_id" value="1" readonly><br></td></tr>
<tr>
<th>Position ID:-</th>
<td><input type="text" name="position_id" value="1" readonly><br></td></tr>
<tr>
<th>Secret Question:-</th>
<td><Input type="text" name="secret_question"><br></td></tr>
<tr>
<th>Secret Answer:-</th>
<td><input type="text" name="secret_answer"><br><br></td></tr>
</table>

<table align="center">
<tr>
<td><input type="submit" value="submit"></td></tr>
</table>
</form>
</body>
</html>
