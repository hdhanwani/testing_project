<?php

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
<h1>Send Text Msg By Filling the Below Details:-</h1><br><br>
<form  name="sendmail_details" action="send-mail.php" method="post"><br><br>
Enter the number : <input type="text" name="phone_number"><br><br>
Enter subject:<input type="text" name="subject_msg"><br><br>
Enter Message:<input type="text" name="content_msg"><br><br>
Select the carrier of the number: <br>
<select name="carriers" >
<option value="@txt.att.net">att</option>
<option value="@vtext.com">verizon wireless</option>
<option value="@sprintpcs.com">sprint</option>
<option value="@tmomail.net">tmobile</option>
</select><br><br>

<input type="submit" value="submit">

</form>
</body>
</html>

