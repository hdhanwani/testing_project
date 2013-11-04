<?php
session_start();

if (isset($_SESSION['CurrentUser']))
{
 echo  $_SESSION['CurrentUser'] ."Your Employee Id is". $_SESSION ['empid']. " This is your Profile ";
}

else 
{
 header ('location:http://localhost/testing_project/index.html');
}

$con =mysqli_connect("localhost","root","3rdmarch","real_estate");
 
 if(mysqli_connect_errno($con))
{
 echo "failed to connect to mysql:" .mysqli_connect_error();
 }
 
 else
 {
  mysqli_query($con,"insert into login(username,passwd,emp_id,dept_id,position_id,forgot_passwd_questions,forgot_passwd_answers)
  values('$_POST[username]','$_POST[passwd]','$_POST[emp_id]','$_POST[dept_id]','$_POST[position_id]','$_POST[secret_question]','$_POST[secret_answer]')");
  
 }
 
 $result = mysqli_query($con,"select * from login order by login_id desc limit 1;");
 
 echo "<table border =1>";
	echo "<th>" . "login_id" . "</th>";
	echo "<th>" . "username" . "</th>";
	echo "<th>" . "passwd" . "</th>";
	echo "<th>" . "emp_id" . "</th>";
	echo "<th>" . "dept_id" . "</th>";
	echo "<th>" . "position_id" . "</th>";
	echo "<th>" . "forgot_passwd_questions" . "</th>";
	echo "<th>" . "forgot_passwd_answers" . "</th>";
	
while ($row=mysqli_fetch_array($result))
	{
    echo " <tr> "; 
	echo "<td>" . $row ['login_id'] . "</td>";
	echo "<td>" . $row ['username'] . "</td>";
	echo "<td>" . $row ['passwd'] . "</td>";
	echo "<td>" . $row ['emp_id'] . "</td>";
	echo "<td>" . $row ['dept_id'] . "</td>";
	echo "<td>" . $row ['position_id'] . "</td>";
	echo "<td>" . $row ['forgot_passwd_questions'] . "</td>";
	echo "<td>" . $row ['forgot_passwd_answers'] . "</td>";
	
	echo"</tr>";
	}
	
	
  mysqli_close($con)	


 ?>
 
 <html>
<head>
<link rel="stylesheet" type="text/css" href="index.css">
<title> DHANWANI&copy; </title>
</head>
 <body>
	<br><br>
	<h1>This Login Information has been stored to the database</h1><br><br>
	<a href="lead_rep_manager_page_gui.php"><button>Go back to main page</button> </a>
</html>
</body>