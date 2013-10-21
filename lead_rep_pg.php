
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
<a href ='http://localhost/testing_project/lead_rep_pg.php?logout=1'>logout</a><br>
<a href='http://localhost/testing_project/enter_business_leads_pg.php'><button>Enter New Lead</button></a> &nbsp;&nbsp;&nbsp;
<a href='http://localhost/testing_project/search_business_leads_pg.php'><button>Search For Lead</button></a> &nbsp;&nbsp;&nbsp;
<a href ='http://localhost/testing_project/check_your_peroformance_pg.php'><button>Check your Performance</button></a> &nbsp;&nbsp;&nbsp;
<a href='http://localhost/testing_project/check_leads_assigned_to_you_pg.php'><button>Check Leads assigned to you</button></a> &nbsp;&nbsp;&nbsp;
<a href='http://localhost/testing_project/check_ongoing_projects_pg.php'><button>Check on going projects information</button></a> &nbsp;&nbsp;&nbsp;
<a href='http://localhost/testing_project/edit_business_leads_info_pg.php'><button>Edit business leads information</button></a> &nbsp;&nbsp;&nbsp;
<a href='http://localhost/testing_project/see_tasks_assigned_pg.php'><button>See Tasks assigned to you</button> </a> &nbsp;&nbsp;&nbsp;
<a href='http://localhost/testing_project/sendmail_details_pg.php'><button>Send Text Messages</button></a> &nbsp;&nbsp;

</body>
</html>

