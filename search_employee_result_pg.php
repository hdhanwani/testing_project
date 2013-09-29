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
  
  $query = "select * from employees where ";
  
   if(!empty($_POST['search_by_empid']))
   {
	 $query=$query." emp_id =".$_POST['search_by_empid']." and";
     	 
   }
  
  if(!empty($_POST['search_by_fname']))
   {
	 $query=$query." first_name LIKE '".$_POST['search_by_fname']."%' and"; 
   }
  
  if(!empty($_POST['search_by_lname']))
   {
	 $query=$query." last_name LIKE '".$_POST['search_by_lname']."%' and"; 
   }
   
   if(!empty($_POST['search_by_address']))
   {
	 $query=$query." address LIKE '".$_POST['search_by_address']."%' and"; 
   }
   
   if(!empty($_POST['search_by_contact_no']))
   {
	 $query=$query." contact_no = ".$_POST['search_by_contact_no']." and"; 
   }
   
   if(!empty($_POST['search_by_email']))
   {
	 $query=$query." email LIKE '".$_POST['search_by_email']."%' and";
   }
  
   if(!empty($_POST['search_by_joining_date']))
   {
	 $query=$query." joining_date >= ".$_POST['search_by_joining_date']." and";	 
   }
   
   if(!empty($_POST['search_by_salary']))
   {
	 $query=$query." basic_salary = ".$_POST['search_by_salary']." and";
   }
  $query = substr($query,0,-4);
  $query = $query.";"; 
  
  //echo $query;
//   if(isset($_POST['search_by_empid']))
//   {
     
 // }
  
  $result=mysqli_query($con,"$query") or die("Error: ".mysqli_error($con)); 
  echo "<table border =1>";
	echo "<th>" . "emp_id" . "</th>";
	echo "<th>" . "first_name" . "</th>";
	echo "<th>" . "last_name" . "</th>";
	echo "<th>" . "address" . "</th>";
	echo "<th>" . "contact_no" . "</th>";
	echo "<th>" . "email" . "</th>";
	echo "<th>" . "dept_id" . "</th>";
	echo "<th>" . "position_id" . "</th>";
	echo "<th>" . "joining_date" . "</th>";
	echo "<th>" . "basic_salary" . "</th>";
	
	
	while ($row = mysqli_fetch_array($result))
	{
    echo " <tr> "; 
	echo "<td>" . $row ['emp_id'] . "</td>";
	echo "<td>" . $row ['first_name'] . "</td>";
	echo "<td>" . $row ['last_name'] . "</td>";
    echo "<td>" . $row ['address'] . "</td>";
    echo "<td>" . $row ['contact_no'] . "</td>";
    echo "<td>" . $row ['email'] . "</td>";
    echo "<td>" . $row ['dept_id'] . "</td>";
	echo "<td>" . $row ['position_id'] . "</td>";
	echo "<td>" . $row ['joining_date'] . "</td>";
	echo "<td>" . $row ['basic_salary'] . "</td>";
		
	
	echo"</tr>";
   }
   
   mysqli_close($con);
?>

<html>
<body>
<br>
<br>
<a href="lead_rep_manager_pg.php">Go back to main page</a>
</html>
</body>