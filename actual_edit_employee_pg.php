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

//echo $_POST['select1'] ;

$con= mysqli_connect("localhost","root","3rdmarch","real_estate");
 //checking connection
 if (mysqli_connect_errno($con))
 {
  echo " error in connection with real_estate database:" . mysqli_connect_error();
  }
  
  $query = "select * from employees where emp_id ='".$_POST['select1']."'  ";
  $result=mysqli_query($con,"$query") or die("Error: ".mysqli_error($con));
  
 $row = mysqli_fetch_array($result) ;
 
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
<br><br>
<form name="edit_employee_info2" action="http://localhost/testing_project/actual_edit_employee_result_pg.php" method="post">
Emp ID: <input type="text" name="employeeID" value="<?php echo $row['emp_id'] ?>" readonly><br>
First name: <input type="text" name="firstname" value="<?php echo $row['first_name'] ?>"><br>
Last name: <input type="text" name="lastname" value="<?php echo $row['last_name'] ?>"><br>
Address: <textarea rows="5" cols="30" name="address" ><?php echo $row['address'] ?></textarea><br>
Contact number :<input type="text" name="contact_no" value="<?php echo $row['contact_no'] ?>"><br>
Email :<input type="text" name="email" value="<?php echo $row['email'] ?>"><br>
Dept ID:<input type="text" name="dept_id" value="1" readonly><br>
Position ID:<input type="text" name="position_id" value="1" readonly><br>
Joining Date:<Input type="text" name="joining_date" value="<?php echo $row['joining_date'] ?>" readonly><br>
Basic Salary:<input type="text" name="basic_salary" value="<?php echo $row['basic_salary'] ?>"><br><br>
<input type="submit" value="submit">
</form>

</html>
</body>