<?php

//create connection
$con =mysqli_connect("localhost","root","3rdmarch","real_estate");

//check connection
//if(mysqli_connect_errno($con))
//{
 //echo"failed to connect to mysql:" .mysqli_connect_error();
 //}
 
//else 


//if(isset($_POST[username]) and isset($_POST[passwd] ))

 $uname=($_POST['username']);
 $passwd=($_POST['passwd']);
 $sql="select * from login where username ='".$_POST['username']."' AND passwd ='".$_POST['passwd']."'";
 $query= mysqli_query($con,$sql);
 $row=mysqli_fetch_row($query);
 $lid=$row[0];
 $dbuname=$row[1];
 $dbpasswd=$row[2];
 
 if($dbuname==$uname && $dbpasswd==$passwd)
 {
  echo "login";
 }
 else
 {
  echo "unsucessful login";
 }




 ?>