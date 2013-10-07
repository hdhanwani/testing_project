
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
<body>
<h1>Lead_rep_page</h1> 
<a href ='http://localhost/testing_project/lead_rep_pg.php?logout=1'>logout button</a>
<a href='http://localhost/testing_project/enter_business_leads_pg.php'>Enter New Lead</a> &nbsp;&nbsp;&nbsp;
<a href='http://localhost/testing_project/search_business_leads_pg.php'>Seach For Lead</a> &nbsp;&nbsp;&nbsp;
<a href ='http://localhost/testing_project/check_your_peroformance_pg.php'>Check your Performance</a> &nbsp;&nbsp;&nbsp;
<a href='http://localhost/testing_project/check_leads_assigned_to_you_pg.php'>Check Leads assigned to you</a> &nbsp;&nbsp;&nbsp;
<a href='http://localhost/testing_project/check_ongoing_projects_pg.php'>Check on going projects information</a> &nbsp;&nbsp;&nbsp;
<a href='http://localhost/testing_project/edit_business_leads_info_pg.php'>Edit business leads information</a> &nbsp;&nbsp;&nbsp;
<a href='http://localhost/testing_project/see_tasks_assigned_pg.php'>See Tasks assigned to you </a> &nbsp;&nbsp;&nbsp;

</body>
</html>

