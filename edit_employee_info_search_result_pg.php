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
  
   if(!empty($_POST['search_by_empid2']))
   {
	 $query=$query." emp_id =".$_POST['search_by_empid2']." and";
     	 
   }
  
  if(!empty($_POST['search_by_fname2']))
   {
	 $query=$query." first_name LIKE '".$_POST['search_by_fname2']."%' and"; 
   }
  
  if(!empty($_POST['search_by_lname2']))
   {
	 $query=$query." last_name LIKE '".$_POST['search_by_lname2']."%' and"; 
   }

  if(!empty($_POST['search_by_contact_no2']))
   {
	 $query=$query." contact_no = ".$_POST['search_by_contact_no2']." and"; 
   }

$query = substr($query,0,-4);
  $query = $query.";"; 
  
  $result=mysqli_query($con,"$query") or die("Error: ".mysqli_error($con));

  echo "<form name ='edit_submit' action='actual_edit_employee_pg.php' method='post'>" ; 
  echo "<table border =1>";
    echo "<th>" . "select" . "</th>";
	echo "<th>" . "emp_id" . "</th>";
	echo "<th>" . "first_name" . "</th>";
	echo "<th>" . "last_name" . "</th>";
	echo "<th>" . "contact_no" . "</th>";

  
  
while ($row = mysqli_fetch_array($result))
	{
    echo " <tr> "; 
	echo "<td>" . "<input type = 'radio' name= 'select1' value='".$row['emp_id']."' >"."</td>" ;
	echo "<td>" . $row ['emp_id'] . "</td>";
	echo "<td>" . $row ['first_name'] . "</td>";
	echo "<td>" . $row ['last_name'] . "</td>";
    echo "<td>" . $row ['contact_no'] . "</td>"; 
	
	
	echo"</tr>";
	
 	}
	echo "</table>" ;
    echo "<br>";
    echo "<br>";	
	echo "<input type ='submit' name='submit' value='EDIT'>";
	echo "</form>" ;
	
	 
	
	mysqli_close($con);
   



?>