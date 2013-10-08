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
<body>
<h1>lead_rep_Manager_page(Manager)</h1>
<a href ='http://localhost/testing_project/lead_rep_pg.php?logout=1'>logout button</a><br><br><br>
<a href='http://localhost/testing_project/enter_employee_pg.php'>Enter New Employee</a> &nbsp;&nbsp;&nbsp;
<a href='http://localhost/testing_project/search_employee_pg.php'>Seach For Employee</a> &nbsp;&nbsp;&nbsp;
<a href='http://localhost/testing_project/edit_employee_info_pg.php'>Edit Employee Information</a>&nbsp;&nbsp;&nbsp;
<a href='http://localhost/testing_project/assign_tasks_pg.php'>Assign Tasks To Employees</a>&nbsp;&nbsp;&nbsp;
<a href='http://localhost/testing_project/add_news_bulletin_pg.php'>Add News And Bulletin<br><br><br><br>
<a href='http://localhost/testing_project/see_statistics_button_pg.php'>See Statistics</a><br><br>
<a href='http://localhost/testing_project/sendmail_details_pg.php'>Send Text Msgs </a> <br><br><br>
<a href='http://localhost/testing_project/check_ongoing_projects_pg.php'>Check on going projects information</a> &nbsp;&nbsp;&nbsp;
<a href='http://localhost/testing_project/check_tasks_assigned_by_you.php'>Check tasks assigned by you </a> &nbsp;&nbsp;&nbsp;
</body>
</html>