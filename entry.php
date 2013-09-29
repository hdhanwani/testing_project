<?php

//create connection
$con =mysqli_connect("localhost","root","3rdmarch","real_estate");

//check connection
if(mysqli_connect_errno($con))
{
 echo"failed to connect to mysql:" .mysqli_connect_error();
 }
 
else if
{
if(isset($_POST[username]) and isset($_POST[passwd] ))
{
 $check=mysqli_query($con,"Select * from login where username=$_POST['username'] AND passwd=$_POST['passwd']
 $result=($check,0)
 
 if($result!=1)
 {
  echo "invalid login";
 }
 else
 {
  echo "succesful login";
 }
 
}

}
 ?>