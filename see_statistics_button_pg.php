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
<h1>Enter Employee ID'S to check performance</h1><br><br>
<form name="employee_performance_pie" action="http://localhost/testing_project/see_statistics_result_pg.php" method="post">
Enter Employee id 1 : <input type="text" name="empid_perform1"><br><br>
Enter Employee id 2 : <input type="text" name="empid_perform2"><br><br>
Enter Employee id 3 : <input type="text" name="empid_perform3"><br><br>
Enter Employee id 4 : <input type="text" name="empid_perform4"><br><br>
Enter Employee id 5 : <input type="text" name="empid_perform5"><br><br>  



<input type="submit" name="submit" value="Display pie chart"><br><br>

</form> 

<form name="employee_performance_vbar" action="see_statistics_result1_pg.php" method="post">
Enter Employee id 1 : <input type="text" name="empid_perform1"><br><br>
Enter Employee id 2 : <input type="text" name="empid_perform2"><br><br>
Enter Employee id 3 : <input type="text" name="empid_perform3"><br><br>
Enter Employee id 4 : <input type="text" name="empid_perform4"><br><br>
Enter Employee id 5 : <input type="text" name="empid_perform5"><br><br>

<input type="submit" name="submit" value="Display vertical bar chart"><br><br>
</form>

<form name="employee_performance_hbar" action="http://localhost/testing_project/see_statistics_result2_pg.php" method="post">
Enter Employee id 1 : <input type="text" name="empid_perform1"><br><br>
Enter Employee id 2 : <input type="text" name="empid_perform2"><br><br>
Enter Employee id 3 : <input type="text" name="empid_perform3"><br><br>
Enter Employee id 4 : <input type="text" name="empid_perform4"><br><br>
Enter Employee id 5 : <input type="text" name="empid_perform5"><br><br>
<input type="submit" name="submit" value="Display horizontal bar chart"><br><br>
</form>

</body>
</html>