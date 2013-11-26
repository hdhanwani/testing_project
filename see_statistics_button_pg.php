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
<h1>Enter Employee ID'S to check performance</h1><br><br>
<table align = "center">
<form name="employee_performance_pie" action="http://localhost/testing_project/see_statistics_result_pg.php" method="post">
<tr>
<th>Enter Employee id 1 :- </th>
<td> <input type="text" name="empid_perform1"><br><br> </td> </tr>
<tr>
<th>Enter Employee id 2 :- </th>
<td> <input type="text" name="empid_perform2"><br><br> </td> </tr>
<tr>
<th>Enter Employee id 3 :- </th>
<td> <input type="text" name="empid_perform3"><br><br> </td> </tr>
<tr>
<th>Enter Employee id 4 :- </th>
<td> <input type="text" name="empid_perform4"><br><br> </td> </tr>
<tr>
<th>Enter Employee id 5 :- </th>
<td> <input type="text" name="empid_perform5"><br><br> </td> </tr>  

<table align ="center">
<tr>
<td><input type="submit" name="submit" value="Display pie chart"><br><br></td> </tr>
</table>
</form> 

<table align="center">
<form name="employee_performance_vbar" action="see_statistics_result1_pg.php" method="post">
<tr>
<th>Enter Employee id 1 :- </th> 
<td><input type="text" name="empid_perform1"><br><br></td> </tr>
<tr>
<th>Enter Employee id 2 :-</th>
<td> <input type="text" name="empid_perform2"><br><br> </td> </tr>
<tr>
<th>Enter Employee id 3 :-</th> 
<td><input type="text" name="empid_perform3"><br><br></td></tr>
<tr>
<th>Enter Employee id 4 :-</th> 
<td><input type="text" name="empid_perform4"><br><br></td></tr>
<tr>
<th>Enter Employee id 5 :-</th> 
<td><input type="text" name="empid_perform5"><br><br></td></tr>

<table align="center">
<tr>
<td><input type="submit" name="submit" value="Display vertical bar chart"><br><br></td></tr>
</table>
</form>

<table align="center">
<form name="employee_performance_hbar" action="http://localhost/testing_project/see_statistics_result2_pg.php" method="post">
<tr>
<th>Enter Employee id 1 :-</th> 
<td><input type="text" name="empid_perform1"><br><br></td></tr>
<tr>
<th>Enter Employee id 2 :-</th>
<td><input type="text" name="empid_perform2"><br><br></td></tr>
<tr>
<th>Enter Employee id 3 :-</th> 
<td><input type="text" name="empid_perform3"><br><br></td></tr>
<tr>
<th>Enter Employee id 4 :-</th> 
<td><input type="text" name="empid_perform4"><br><br></td></tr>
<tr>
<th>Enter Employee id 5 :-</th> 
<td><input type="text" name="empid_perform5"><br><br></td></tr>

<table align="center">
<tr>
<td><input type="submit" name="submit" value="Display horizontal bar chart"><br><br></td></tr>
</table>
</form>

</body>
</html>