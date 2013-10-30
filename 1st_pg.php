

<?php
session_start();
//create connection
$con = mysqli_connect("localhost","root","3rdmarch","real_estate") ;
//$con = mysqli_connect("localhost","3rdmarch","root") ;

//check connection
//if(mysqli_connect_errno($con))
//{
 //echo"failed to connect to mysql:" .mysqli_connect_error();
//}
 
//else
//{ 


//if(isset($_POST[username]) and isset($_POST[passwd]))

  $uname=($_POST['username']);
  $passwd=($_POST['passwd']);
  $sql="select login_id,username,passwd,position_id,emp_id from login where username = '".$_POST['username']."' AND passwd ='".$_POST['passwd']."'";
  $query= mysqli_query($con,$sql);
  $row=mysqli_fetch_row($query);
  $lid=$row[0];
  $dbuname=$row[1];
  $dbpasswd=$row[2];
  $dbpostid=$row[3];
  $dbempid=$row[4];
 
  if($dbuname==$uname && $dbpasswd==$passwd)
  {
   $_SESSION['empid']=$dbempid;
   if($dbpostid==1)
        {
		 $_SESSION['CurrentUser']=$uname;
		header( 'Location: http://localhost/testing_project/lead_rep_pg.php' ) ;
        }
   else if($dbpostid==2)
{
        $_SESSION['empid'] =$dbempid;
        $_SESSION['CurrentUser'] =$uname;
        header( 'Location: http://localhost/testing_project/lead_rep_manager_page_gui.php' );
}   
  }
  else
  {
   echo "unsuccessful login";
  }




 ?>
 
 