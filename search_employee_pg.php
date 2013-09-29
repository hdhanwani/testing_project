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
<H1>SEARCH EMPLOYEES USING TEXTFIELDS BELOW:-</H1>
<br><br>
<form name="Search_employee" action="http://localhost/testing_project/search_employee_result_pg.php" method="post">
SEARCH BY Employee ID:-<input type="text" name="search_by_empid"><br><br>
SEARCH BY FIRST NAME:-<input type="text" name="search_by_fname"><br><br>
SEARCH BY LAST NAME:-<input type="text" name="search_by_lname"><br><br>
SEARCH BY ADDRESS:-<textarea rows="5" cols="30" name="search_by_address"></textarea><br><br>
SEARCH BY CONTACT NUMBER:-<input type="text" name="search_by_contact_no"><br><br>
SEARCH BY EMAIL:-<input type="text" name="search_by_email"><br><br>
SEARCH BY JOINING DATE:-<input type="text" name="search_by_joining_date"><br><br>
SEARCH BY SALARY:-<input type="text" name="search_by_salary"><br><br>
<input type="submit" name="submit">

</html>
</body>
