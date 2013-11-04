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
  
  mysqli_query($con,"update business_leads set first_name='".$_POST['firstname']."',last_name='".$_POST['lastname']."',address='".$_POST['address']."',
  contact_no='".$_POST['contact_no']."',email='".$_POST['email']."',marital_status='".$_POST['marital_status']."',
  preferences='".$_POST['preferences']."',final_status='".$_POST['final_status']."'
  where lead_id ='".$_POST['LeadId']."'"); //or die("Error :".mysqli_error($con));
  
  $result = mysqli_query($con,"select * from business_leads where lead_id ='".$_POST['LeadId']."';") ;
  
echo "<table border =1>";
    echo "<th>" . "lead_id" . "</th>";
	echo "<th>" . "emp_id" . "</th>";
	echo "<th>" . "first_name" . "</th>";
	echo "<th>" . "last_name" . "</th>";
	echo "<th>" . "address" . "</th>";
	echo "<th>" . "contact_no" . "</th>";
	echo "<th>" . "email" . "</th>";
	echo "<th>" . "marital_status" . "</th>";
	echo "<th>" . "property_type_needed" . "</th>";
	echo "<th>" . "ownership_type" . "</th>";
	echo "<th>" . "preferences" . "</th>";
	echo "<th>" . "date_of_registration" . "</th>";
	echo "<th>" . "rank" . "</th>";
	echo "<th>" . "final_status" . "</th>";
	echo "<th>" . "recommendation_id" . "</th>";
	
	
while ($row=mysqli_fetch_array($result))
	{
    echo " <tr> "; 
	echo "<td>" . $row ['lead_id'] . "</td>";
	echo "<td>" . $row ['emp_id'] . "</td>";
	echo "<td>" . $row ['first_name'] . "</td>";
	echo "<td>" . $row ['last_name'] . "</td>";
	echo "<td>" . $row ['address'] . "</td>";
	echo "<td>" . $row ['contact_no'] . "</td>";
	echo "<td>" . $row ['email'] . "</td>";
	echo "<td>" . $row ['marital_status'] . "</td>";
	echo "<td>" . $row ['property_type_needed'] . "</td>";
	echo "<td>" . $row ['ownership_type'] . "</td>";
	echo "<td>" . $row ['preferences'] . "</td>";
	echo "<td>" . $row ['date_of_registration'] . "</td>";
	echo "<td>" . $row ['rank'] . "</td>";
	echo "<td>" . $row ['final_status'] . "</td>";
	echo "<td>" . $row ['recommendation_id'] . "</td>";
	
	echo"</tr>";
	}
	
	
  mysqli_close($con)	
  
  



?>

<html>
<body>
<br>
<br>
<H1>The business_lead_information information submitted after edit is:- </h1><br><br>
<a href ='lead_reps_page.php'><button> GO BACK TO MAIN PAGE </button></a> <br><br><br>


</html>
</body>



