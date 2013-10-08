<?php

?>
<html>
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

