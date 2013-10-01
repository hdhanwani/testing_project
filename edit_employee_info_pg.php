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
<body>
<H1>SEARCH EMPLOYEE OF WHOSE INFORMATION IS TO BE EDITED </H1>
<br><br>
<form name="Search_employee_info" action="http://localhost/testing_project/edit_employee_info_search_result_pg.php" method="post">
SEARCH BY Employee ID:-<input type="text" name="search_by_empid2"><br><br>
SEARCH BY FIRST NAME:-<input type="text" name="search_by_fname2"><br><br>
SEARCH BY LAST NAME:-<input type="text" name="search_by_lname2"><br><br>
SEARCH BY CONTACT NUMBER:-<input type="text" name="search_by_contact_no2"><br><br>

<input type="submit" name="submit" value="EDIT">

</html>
</body>