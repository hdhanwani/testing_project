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
<table align="center">
<form name="lead_info" action="http://localhost/testing_project/lead_info_submit_pg.php" method="post">
<tr>
<th>Emp id:-</th>
 <td> <input type="text" name="emp_id1" value="<?php echo $_SESSION['empid']; ?>" readonly><br> </td></tr>
 <tr>
<th>First Name:-</th> 
<td> <input type="text" name="firstname1"><br> </td> </tr>
<tr>
<th> Last Name:- </th> 
<td><input type="text" name="lastname1"><br></td></tr>
<tr>
<th>Address:-</th>
<td><textarea rows="5" cols="30" name="address1"></textarea><br><br></td></tr>
<tr>
<th>Contact number:-</th>
<td><input type="text" name="contact_no1"><br></td></tr>
<tr>
<th>Email:-</th>
<td><input type="text" name="email1"><br></td></tr>
<tr>
<th>Marital_status:-</th>
<td><input type="radio" name="marital_status" value="single">Single &nbsp;&nbsp; <input type="radio" name="marital_status" value="married">Married
<br><br></td></tr>
<tr>
<th>Property type needed:-</th>
<td><input type="radio" name="property_type" value="apartment"> Apartment &nbsp;&nbsp; 
 <input type="radio" name="property_type" value="house"> House &nbsp;&nbsp;
<input type="radio" name="property_type" value="villa"> Villa &nbsp;&nbsp;
<input type="radio" name="property_type" value="commercial"> Commercial &nbsp;&nbsp; <br><br> </td></tr>
<tr>
<th>Ownership type:-</th>
<td><Input type="radio" name="ownership_type" value="buy">Buy &nbsp;&nbsp;
<Input type="radio" name="ownership_type" value="lease">Lease &nbsp;&nbsp; <br><br> </td></tr>
<tr>
<th>Preferences:- </th>
<td><textarea rows="5" cols="30" name="preferences"></textarea><br><br> </td></tr>
<tr>
<th>Date of registration:-</th> 
<td><input type ="text" name="dor"><br><br></td></tr>
<tr>
<th>Rank:-</th> 
  <td><select name="rank">
   <option  value="1">1</option>
   <option  value="2">2</option>
   <option  value="3">3</option>
   <option  value="4">4</option>
   <option  value="5">5</option>
      </select> <br><br> </td></tr>
<tr>	  
<th>Final Status:-</th>
<td><Input type="radio" name="final_status" value="Open" checked>Open &nbsp;&nbsp;
<Input type="radio" name="final_status" value="lease">Closed &nbsp;&nbsp;	<br><br> </td></tr>

</table>
 <table align="center">
 <tr>
<td> <input type="submit" value="submit"> </td> </tr>
</table>
</form>
</body>
</html>