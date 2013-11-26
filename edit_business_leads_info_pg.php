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
<H1>SEARCH BUSINESS LEADS OF WHOSE INFORMATION IS TO BE EDITED </H1>
<br><br>
<form name="Search_business_lead_info" action="http://localhost/testing_project/edit_business_leads_info_search_result_pg.php" method="post">
<table align="center">
<tr>
<th>SEARCH BY Employee ID:-</th>
<td><input type="text" name="search_by_empid3"><br><br></td></tr>
<tr>
<th>SEARCH BY FIRST NAME:-</th>
<td><input type="text" name="search_by_fname3"><br><br></td></tr>
<tr>
<th>SEARCH BY LAST NAME:-</th>
<td><input type="text" name="search_by_lname3"><br><br></td></tr>
<tr>
<th>SEARCH BY CONTACT NUMBER:-</th>
<td><input type="text" name="search_by_contact_no3"><br><br></td></tr>
</table>

<table align="center">
<tr>
<td><input type="submit" name="submit" value="EDIT"></td></tr>
</table>
</form>
</body>
</html>

