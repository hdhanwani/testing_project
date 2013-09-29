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

$con= mysqli_connect("localhost","root","3rdmarch","real_estate");
 //checking connection
 if (mysqli_connect_errno($con))
 {
  echo " error in connection with real_estate database:" . mysqli_connect_error();
  }
  
  $query = "select * from business_leads where ";
  
  if(!empty($_POST['search_by_empid1']))
   {
	 $query=$query." emp_id =".$_POST['search_by_empid1']." and";
     	 
   }
   
   if(!empty($_POST['search_by_fname1']))
   {
	 $query=$query." first_name LIKE '".$_POST['search_by_fname1']."%' and"; 
   }
   
   if(!empty($_POST['search_by_lname1']))
   {
	 $query=$query." last_name LIKE '".$_POST['search_by_lname1']."%' and";	 
   }
   
   if(!empty($_POST['search_by_address1']))
   {
	 $query=$query." address LIKE '".$_POST['search_by_address1']."%' and"; 
   }
   
   if(!empty($_POST['search_by_contact_no1']))
   {
	 $query=$query." contact_no = ".$_POST['search_by_contact_no1']." and"; 
   }
   
   if(!empty($_POST['search_by_email1']))
   {
	 $query=$query." email LIKE '".$_POST['search_by_email1']."%' and";
   }
   
   if(!empty($_POST['search_by_marital_status']))
   {
	 $query=$query." marital_status LIKE '".$_POST['search_by_marital_status']."%' and";
   }
   
   if(!empty($_POST['search_by_property_type_needed']))
   {
	 $query=$query." property_type_needed LIKE '".$_POST['search_by_property_type_needed']."%' and";
   }
   
   if(!empty($_POST['search_by_ownership_type']))
   {
	 $query=$query." ownership_type LIKE '".$_POST['search_by_ownership_type']."%' and";
   }
   
   if(!empty($_POST['search_by_preferences']))
   {
	 $query=$query." preferences LIKE '".$_POST['search_by_preferences']."%' and";
   }
   
   
   
   if(!empty($_POST['search_by_date_of_registration']))
   {
	 $query=$query." date_of_registration >= ".$_POST['search_by_date_of_registration']." and";	 
   }
   
   if(!empty($_POST['search_by_rank']))
   {
	 $query=$query." rank =".$_POST['search_by_rank']." and";
     	 
    }
	
	if(!empty($_POST['search_by_final_status']))
   {
	 $query=$query." final_status LIKE '".$_POST['search_by_final_status']."%' and";
   }
	
  $query = substr($query,0,-4);
  $query = $query.";";

$result3=mysqli_query($con,"$query") or die("Error: ".mysqli_error($con)); 
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
	
	
	while ($row = mysqli_fetch_array($result3))
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
  
   
 mysqli_close($con); 
  
  
  
?>