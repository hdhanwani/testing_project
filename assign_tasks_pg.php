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
<link rel="stylesheet" type="text/css" href="index.css">
<h1> Business Leads Management System &copy;</h1>
	<table align="center">
		<th><p>Project by : Hitesh Dhanwani</p></th>
		<th><p>E-mail: <a href="mailto:hdhanwani@gmail.com">hdhanwani@mail.fresnostate.edu.</a></p></th>
	</table>
<title> DHANWANI&copy; </title>

</head>

<body>

<h1> ASSIGN TASKS TO EMPLOYEES USING THIS PAGE </h1>
<h2> ENTER EMPLOYEE TO WHOM THE TASK IS TO BE ASSIGNED </h2>
<table align ="center">
<form name="assign_task" action="http://localhost/testing_project/tasks_info_submit_pg.php" method="post">
<tr>
<th>Enter Task Title :- </th>
<td> <input type ="text" name = "task_title"> <br><br> </td> </tr>
<tr>
<th>Enter Task Description :- </th>
<td> <textarea rows="5" cols="30" name="task_description"></textarea> <br><br> </td> </tr>
<tr>
<th>Enter employee id:- </th>
<td> <input type= "text" name = "emp_id7"> <br><br> </td> </tr>
<tr>
<th>Enter your id :- </th>
<td> <input type ="text" name ="mangers_emp_id" value="5" readonly> <br><br> </td> </tr>
<tr>
<th>Final Status:- </th>
<td><Input type="radio" name="final_status1" value="Incomplete" checked>Incomplete &nbsp;&nbsp; 
<Input type="radio" name="final_status1" value="Complete">Complete &nbsp;&nbsp;	<br><br> </td> </tr>
<tr>
<th>Date of assigning :- </th>
<td> <input type ="text" name="doa"> <br><br> </td> </tr>
<table align ="center">
<tr>
<td><input type="submit" value="submit"><br><br></td></tr> 
</table> 
</form>
</body>
</html>