

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

echo $_POST['select2'] ;

$con= mysqli_connect("localhost","root","3rdmarch","real_estate");
 //checking connection
 if (mysqli_connect_errno($con))
 {
  echo " error in connection with real_estate database:" . mysqli_connect_error();
  }
  
  $query = "select * from business_leads where lead_id ='".$_POST['select2']."'  ";
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
<form name="edit_business_leads_info2" action="http://localhost/testing_project/actual_edit_business_leads_result_pg.php" method="post">

Lead ID:<input type="text" name="LeadId" value="<?php echo $row['lead_id'] ?>" readonly><br>
Emp ID: <input type="text" name="employeeID" value="<?php echo $row['emp_id'] ?>" readonly><br>
First name: <input type="text" name="firstname" value="<?php echo $row['first_name'] ?>"><br>
Last name: <input type="text" name="lastname" value="<?php echo $row['last_name'] ?>"><br>
Address: <textarea rows="5" cols="30" name="address" ><?php echo $row['address'] ?></textarea><br>
Contact number :<input type="text" name="contact_no" value="<?php echo $row['contact_no'] ?>"><br>
Email :<input type="text" name="email" value="<?php echo $row['email'] ?>"><br>
Martital status :<input type="text" name="marital_status" value="<?php echo $row['marital_status'] ?>"><br>

<!-- Property type needed:
<input type="radio" name="property_type" value="apartment"> Apartment &nbsp;&nbsp; 
<input type="radio" name="property_type" value="house"> House &nbsp;&nbsp;
<input type="radio" name="property_type" value="villa"> Villa &nbsp;&nbsp;
<input type="radio" name="property_type" value="commercial"> Commercial &nbsp;&nbsp; <br><br> -->


Preferences : <textarea rows="5" cols="30" name="preferences"><?php echo $row['preferences'] ?></textarea><br><br>



	  
Final Status:
<Input type="radio" name="final_status" value="open" checked>Open &nbsp;&nbsp;
<Input type="radio" name="final_status" value="closed">Closed &nbsp;&nbsp;	<br><br>  


<input type="submit" value="submit">
</form>

</body>
</html>

