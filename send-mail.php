<?php

//$to       = 'dalwani.uma@gmail.com';
//$to       = '5597086402@txt.att.net';
//echo $_POST['phone_number'].$_POST['carriers'] ;
 //$num = $_POST['phone_number'];
 //$ext = $_POST['carriers'];
 //$to1 = $num.$ext;
 //echo "$to1 ".$to1;

 $to = $_POST['phone_number'].$_POST['carriers'] ;

$subject  = $_POST['subject_msg'];
$message  = $_POST['content_msg'];
$headers  = 'From: hdhanwani@gmail.com' . "\r\n" .
            'Reply-To: hdhanwani@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();


//mail($to, $subject, $message, $headers);
if(mail($to, $subject, $message, $headers))
    echo "Text Message sent";
else
    echo "Text Message sending failed";
?>