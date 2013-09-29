<?php
session_start();
?>
<?php
if (isset($_SESSION['CurrentUser']))
{
 echo  $_SESSION['CurrentUser'] . " This is your Profile ";
}


else 
{
 header ('location:http://localhost/testing_project/index.html');
}
?>

<html>
<body>
<br><br><br><br>
<form name="employee_info" action="http://localhost/testing_project/employee_info_submit_pg.php" method="post">
First name: <input type="text" name="firstname"><br>
Last name: <input type="text" name="lastname"><br>
Address: <textarea rows="5" cols="30" name="address"></textarea><br>
Contact number :<input type="text" name="contact_no"><br>
Email :<input type="text" name="email"><br>
Dept ID:<input type="text" name="dept_id" value="1" readonly><br>
Position ID:<input type="text" name="position_id" value="1" readonly><br>
Joining Date:<Input type="text" name="joining_date"><br>
Basic Salary:<input type="text" name="basic_salary"><br><br>
<input type="submit" value="submit">
</form>