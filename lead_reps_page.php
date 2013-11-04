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
 echo " welcome ". $_SESSION['CurrentUser'] ." Your employee id is " . $_SESSION['empid'] . " And This is your Profile ";
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
<table align="center">
<tr>
<th><a href="http://localhost/testing_project/enter_business_leads_pg.php"><input type="image" src="lead_rep_buttons/button.png" width="200" height="40"></a></th>
</tr>
</table>
<br>
<table align="center">
<tr>
<th><a href="http://localhost/testing_project/search_business_leads_pg.php"><input type="image" src="lead_rep_buttons/button (1).png" width="200" height="40"></a></th>
<th><a href="http://localhost/testing_project/check_your_peroformance_pg.php"><input type="image" src="lead_rep_buttons/button (2).png" width="200" height="40"></a></th>
<th><a href="http://localhost/testing_project/sendmail_details_pg.php"><input type="image" src="lead_rep_buttons/button (7).png" width="200" height="40"></a></th>
</tr>
</table>
<br>
<table align="center">
<tr>
<th><a href="http://localhost/testing_project/check_ongoing_projects_pg.php"><input type="image" src="lead_rep_buttons/button (4).png" width="230" height="40"></a></th>
<th><a href="http://localhost/testing_project/edit_business_leads_info_pg.php"><input type="image" src="lead_rep_buttons/button (5).png" width="230" height="40"></a></th>
<th><a href="http://localhost/testing_project/see_tasks_assigned_pg.php"><input type="image" src="lead_rep_buttons/button (6).png" width="230" height="40"></a></th>
<th><a href="http://localhost/testing_project/check_leads_assigned_to_you_pg.php"><input type="image" src="lead_rep_buttons/button (3).png" width="230" height="40"></a></th>
</tr>
</table>
<!--<table align="center">
<tr>

</tr>
</table>-->
<br>
<hr>
</body>
</html>