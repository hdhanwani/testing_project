<?php
session_start();
if(isset($_GET['logout']))
{
 session_unset();
 session_destroy();
 header ('location:http://localhost/testing_project/index.html');
}
?>

<?php

if (isset($_SESSION['CurrentUser']))
{
 echo " welcome ". $_SESSION['CurrentUser'] . "Your Employee ID is".$_SESSION['empid']. " And this is your Profile ";
}

else 
{
 header ('location:http://localhost/testing_project/index.html');
}

?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="lead_rep_manager_page_gui.css">
	<p class="right"><a href="index.html"><input type="image" src="button (10).png" width="80" height="20"></a></p1>
	
<br><br>
<h1>Business Leads Management System &copy;</h1>
	<table align="center">
		<th><p>Project by : Hitesh Dhanwani</p></th>
		<th><p>E-mail: <a href="mailto:hdhanwani@gmail.com">hdhanwani@mail.fresnostate.edu.</a></p></th>
	</table>
<hr><br><br>
<title> DHANWANI&copy; </title>
</head>

<body>
<table align="center">
<tr>
<th><a href="http://localhost/testing_project/enter_employee_pg.php"><input type="image" src="button (1).png" width="200" height="40"></a></th>
<th><a href="http://localhost/testing_project/search_employee_pg.php"><input type="image" src="button (2).png" width="200" height="40"></a></th>
<th><a href="http://localhost/testing_project/edit_employee_info_pg.php"><input type="image" src="button (3).png" width="200" height="40"></a></th>
</tr>
</table>
<br>
<table align="center">
<tr>
<th><a href="http://localhost/testing_project/assign_tasks_pg.php"><input type="image" src="button (4).png" width="200" height="40"></a></th>
<th><a href="http://www.google.com"><input type="image" src="button (5).png" width="200" height="40"></a></th>
<th><a href="http://localhost/testing_project/see_statistics_button_pg.php"><input type="image" src="button (6).png" width="200" height="40"></a></th>
</tr>
</table>
<br>
<table align="center">
<tr>
<th><a href="http://localhost/testing_project/sendmail_details_pg.php"><input type="image" src="button (7).png" width="200" height="40"></a></th>
<th><a href="http://localhost/testing_project/check_ongoing_projects_pg.php"><input type="image" src="button (8).png" width="200" height="40"></a></th>
<th><a href="http://localhost/testing_project/check_tasks_assigned_by_you.php"><input type="image" src="button (9).png" width="200" height="40"></a></th>
</tr>
</table>
<br><br>
<hr>
</body>
</html>