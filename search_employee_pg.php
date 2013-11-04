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
<H1>SEARCH EMPLOYEES USING TEXTFIELDS BELOW:-</H1>
<br><br>
<table align="center">
<form name="Search_employee" action="http://localhost/testing_project/search_employee_result_pg.php" method="post">
<tr>
<th>SEARCH BY Employee ID:-</th>
<td><input type="text" name="search_by_empid"><br><br></td></tr>
<tr>
<th>SEARCH BY FIRST NAME:-</th>
<td><input type="text" name="search_by_fname"><br><br></td></tr>
<tr>
<th>SEARCH BY LAST NAME:-</th>
<td><input type="text" name="search_by_lname"><br><br></td></tr>
<tr>
<th>SEARCH BY ADDRESS:-</th>
<td><textarea rows="3" cols="16" name="search_by_address"></textarea><br><br></td></tr>
<tr>
<th>SEARCH BY CONTACT NUMBER:-</th>
<td><input type="text" name="search_by_contact_no"><br><br></td></tr>
<tr>
<th>SEARCH BY EMAIL:-</th>
<td><input type="text" name="search_by_email"><br><br></td></tr>
<tr>
<th>SEARCH BY JOINING DATE:-</th>
<td><input type="text" name="search_by_joining_date"><br><br></td></tr>
<tr>
<th>SEARCH BY SALARY:-</th>
<td><input type="text" name="search_by_salary"><br><br></td></tr>
<table align="center">
<tr>
<td><input type="submit" name="submit"></td>
</tr>
</table>
</form>
</body>
</html>
