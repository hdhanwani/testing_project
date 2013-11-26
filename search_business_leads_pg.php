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
	<link rel="stylesheet" type="text/css" href="lead_rep_manager_page_gui.css">
	<p class="right"><a href="index.html"><input type="image" src="lead_rep_buttons/button (8).png" width="80" height="20"></a></p1>
	
<br><br>
<h1>Business Leads Management System &copy;</h1>
	<table align="center">
		<th><p>Project by : Hitesh Dhanwani</p></th>
		<th><p>E-mail: <a href="mailto:hdhanwani@gmail.com">hdhanwani@mail.fresnostate.edu.</a></p></th>
	</table>
<hr><br>
<title> DHANWANI&copy; </title>
</head>


<body>
<H1>SEARCH BUSINESS LEADS USING TEXTFIELDS BELOW:-</H1>
<br><br>
<table align="center">
<form name="Search_employee" action="http://localhost/testing_project/search_business_leads_result_pg.php" method="post">
<tr>
<th>SEARCH BY Employee ID:-</th>
<td> <input type="text" name="search_by_empid1"><br><br></td></tr>
<tr>
<th>SEARCH BY FIRST NAME:-</th>
<td><input type="text" name="search_by_fname1"><br><br></td></tr>
<tr>
<th>SEARCH BY LAST NAME:-</th>
<td><input type="text" name="search_by_lname1"><br><br></td></tr>
<tr>
<th>SEARCH BY ADDRESS:-</th>
<td><textarea rows="5" cols="30" name="search_by_address1"></textarea><br><br></td></tr>
<tr>
<th>SEARCH BY CONTACT NUMBER:-</th>
<td><input type="text" name="search_by_contact_no1"><br><br></td></tr>
<tr>
<th>SEARCH BY EMAIL:-</th>
<td><input type="text" name="search_by_email1"><br><br></td></tr>
<tr>
<th>SEARCH BY MARITAL STATUS:-</th>
<td><input type="text" name="search_by_marital_status"><br><br></td></tr>
<tr>
<th>SEARCH BY PROPERTY TYPE NEEDED:-</th>
<td><input type="text" name="search_by_property_type_needed"><br><br></td></tr>
<tr>
<th>SEARCH BY OWNERSHIP TYPE:-</th>
<td><input type="text" name="search_by_ownership_type"><br><br></td></tr>
<tr>
<th>SEARCH BY PREFERENCES:-</th>
<td><input type="text" name="search_by_preferences"><br><br></td></tr>
<tr>
<th>SEARCH BY DATE OF REGISTRATION:-</th>
<td><input type="text" name="search_by_date_of_registration"><br><br></td></tr>
<tr>
<th>SEARCH BY RANK:-</th>
<td><input type="text" name="search_by_rank"><br><br></td></tr>
<tr>
<th>SEARCH BY FINAL STATUS:-</th>
<td><input type="text" name="search_by_final_status"><br><br></td></tr>
</table>

<table align ="center">
<tr>
<td><input type="submit" name="submit"></td></tr>
</table>
</form>
</body>
</html>
