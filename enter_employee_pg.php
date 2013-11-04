<?php
session_start();
?>
<?php
if (isset($_SESSION['CurrentUser']))
{
 echo  $_SESSION['CurrentUser'] . " This is your Profile ";
}


else 
{
 header ('location:http://localhost/testing_project/index.html');
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
<hr>
<table align="center">
<form name="employee_info" action="http://localhost/testing_project/employee_info_submit_pg.php" method="post">
<tr>
<th>First name:</th> 
<td><input type="text" name="firstname"><br></td>
<th>Last name: </th>
<td><input type="text" name="lastname"><br></td>
</tr>
<tr>
<th>Address: </th>
<td><textarea rows="3" cols="16" name="address"></textarea><br></td>
</tr>
<tr>
<th>Contact number :</th>
<td><input type="text" name="contact_no"><br></td>
<th>Email :</th>
<td><input type="text" name="email"><br></td>
</tr>
<tr>
<th>Dept ID:</th>
<td><input type="text" name="dept_id" value="1" readonly><br></td>
<th>Position ID:</th>
<td><input type="text" name="position_id" value="1" readonly><br></td>
</tr>
<tr>
<th>Joining Date:</th>
<td><Input type="text" name="joining_date"><br></td>
<th>Basic Salary:</th>
<td><input type="text" name="basic_salary"><br><br></td>
</tr>
</table>
<hr>
<table align="center">
<tr>
<td><input type="submit" value="submit"></td>
</tr>
</table>
</form>
</table>