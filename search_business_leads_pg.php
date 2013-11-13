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
<form name="Search_employee" action="http://localhost/testing_project/search_business_leads_result_pg.php" method="post">

SEARCH BY Employee ID:-<input type="text" name="search_by_empid1"><br><br>
SEARCH BY FIRST NAME:-<input type="text" name="search_by_fname1"><br><br>
SEARCH BY LAST NAME:-<input type="text" name="search_by_lname1"><br><br>
SEARCH BY ADDRESS:-<textarea rows="5" cols="30" name="search_by_address1"></textarea><br><br>
SEARCH BY CONTACT NUMBER:-<input type="text" name="search_by_contact_no1"><br><br>
SEARCH BY EMAIL:-<input type="text" name="search_by_email1"><br><br>
SEARCH BY MARITAL STATUS:-<input type="text" name="search_by_marital_status"><br><br>
SEARCH BY PROPERTY TYPE NEEDED:-<input type="text" name="search_by_property_type_needed"><br><br>
SEARCH BY OWNERSHIP TYPE:-<input type="text" name="search_by_ownership_type"><br><br>
SEARCH BY PREFERENCES:-<input type="text" name="search_by_preferences"><br><br>
SEARCH BY DATE OF REGISTRATION:-<input type="text" name="search_by_date_of_registration"><br><br>
SEARCH BY RANK:-<input type="text" name="search_by_rank"><br><br>
SEARCH BY FINAL STATUS:-<input type="text" name="search_by_final_status"><br><br>

<input type="submit" name="submit">

</html>
</body>

