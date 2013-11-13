<?php
session_start();
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
<head>
	<link rel="stylesheet" type="text/css" href="lead_rep_manager_page_gui.css">
	<p class="right"><a href="index.html"><input type="image" src="lead_rep_buttons/button (8).png" width="80" height="20"></a></p1>
	
<br><br>
<h1>Business Leads Management System &copy;</h1>
	<table align="center">
		<th><p>Project by : Hitesh Dhanwani</p></th>
		<th><p>E-mail: <a href="mailto:hdhanwani@gmail.com">hdhanwani@mail.fresnostate.edu.</a></p></th>
	</table>
<hr><br>
<title> DHANWANI&copy; </title>
</head>


<body>
<br><br><br><br>
<form name="lead_info" action="http://localhost/testing_project/lead_info_submit_pg.php" method="post">
Emp id: <input type="text" name="emp_id1" value="<?php echo $_SESSION['empid']; ?>" readonly><br>
First Name: <input type="text" name="firstname1"><br>
Last Name: <input type="text" name="lastname1"><br>
Address:<textarea rows="5" cols="30" name="address1"></textarea><br><br>
Contact number :<input type="text" name="contact_no1"><br>
Email :<input type="text" name="email1"><br>
Marital_status:<input type="radio" name="marital_status" value="single">Single &nbsp;&nbsp; <input type="radio" name="marital_status" value="married">Married
<br><br>
Property type needed:
<input type="radio" name="property_type" value="apartment"> Apartment &nbsp;&nbsp; 
<input type="radio" name="property_type" value="house"> House &nbsp;&nbsp;
<input type="radio" name="property_type" value="villa"> Villa &nbsp;&nbsp;
<input type="radio" name="property_type" value="commercial"> Commercial &nbsp;&nbsp; <br><br>

Ownership type:
<Input type="radio" name="ownership_type" value="buy">Buy &nbsp;&nbsp;
<Input type="radio" name="ownership_type" value="lease">Lease &nbsp;&nbsp; <br><br>

Preferences : <textarea rows="5" cols="30" name="preferences"></textarea><br><br>

Date of registration: <input type ="text" name="dor"><br><br>

Rank: &nbsp;&nbsp; <select name="rank">
   <option  value="1">1</option>
   <option  value="2">2</option>
   <option  value="3">3</option>
   <option  value="4">4</option>
   <option  value="5">5</option>
      </select> <br><br>
	  
Final Status:
<Input type="radio" name="final_status" value="Open" checked>Open &nbsp;&nbsp;
<Input type="radio" name="final_status" value="lease">Closed &nbsp;&nbsp;	<br><br>  

<input type="submit" value="submit">
</form>