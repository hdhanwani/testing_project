<?php
session_start();
if(isset($_GET['logout']))
{
 session_unset();
 session_destroy();
 header ('location:http://localhost/testing_project/index.html');
}
?>

<?php

if (isset($_SESSION['CurrentUser']))
{
 echo " welcome ". $_SESSION['CurrentUser'] . "Your Employee ID is".$_SESSION['empid']. " And this is your Profile ";
}

else 
{
 header ('location:http://localhost/testing_project/index.html');
}

?>
<style>
button {
    color: blue;
	display: inline-block;
	outline: none;
	cursor: pointer;
	text-align: center;
	text-decoration: none;
	font: 14px/100% Arial, Helvetica, sans-serif;
	padding: .5em 2em .55em;
	text-shadow: 0 1px 1px rgba(0,0,0,.3);
	-webkit-border-radius: .5em; 
	-moz-border-radius: .5em;
	border-radius: .5em;
	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2);
	-moz-box-shadow: 0 1px 2px rgba(0,0,0,.2);
	box-shadow: 0 1px 2px rgba(0,0,0,.2);
}
button:hover {
	text-decoration: none;
}
button:active {
	position: relative;
	top: 1px;
}
</style>
<html>
<body bgcolor="beige">
<h1 align="middle">Lead Representative Manager Page</h1>
<a href ='http://localhost/testing_project/lead_rep_pg.php?logout=1' align="top right"><p style="text-align:right">logout button</p></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href='http://localhost/testing_project/enter_employee_pg.php'><button>Enter New Employee</button></a> &nbsp;&nbsp;&nbsp;
<a href='http://localhost/testing_project/search_employee_pg.php'><button>Seach For Employee</button></a> &nbsp;&nbsp;&nbsp;
<a href='http://localhost/testing_project/edit_employee_info_pg.php'><button>Edit Employee Information</button></a>&nbsp;&nbsp;&nbsp;
<a href='http://localhost/testing_project/assign_tasks_pg.php'><button>Assign Tasks To Employees</button></a>&nbsp;&nbsp;&nbsp;
<a href='http://localhost/testing_project/add_news_bulletin_pg.php'><button>Add News And Bulletin</button></a>&nbsp;&nbsp;&nbsp;
<a href='http://localhost/testing_project/see_statistics_button_pg.php'><button>See Statistics</button></a><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href='http://localhost/testing_project/sendmail_details_pg.php'><button>Send Text Msgs </button></a> &nbsp;&nbsp;&nbsp;
<a href='http://localhost/testing_project/check_ongoing_projects_pg.php'><button>Check on going projects information</button></a> &nbsp;&nbsp;&nbsp;
<a href='http://localhost/testing_project/check_tasks_assigned_by_you.php'><button>Check tasks assigned by you </button></a> &nbsp;&nbsp;&nbsp;
<br><br>
</body>
</html>

<html >
<head>

  <title></title>
	
    <script>
        function rotate(imageNumber) {
            var myimage = new Array;
            //Modify these variables as needed
            //vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv            
            myimage.push("image1.jpg");
            myimage.push("image2.jpg"); //Add additional 
            myimage.push("image3.jpg"); //myimage.push()
            myimage.push("image4.jpg"); //for each image
            //myimage.push... etc.
            var time = 2500; //5000 milliseconds = 5 seconds            
            //^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
 
            var image = document.getElementById('rotator');
             
            if (imageNumber < myimage.length) {
                image.src = myimage[imageNumber];                                        
                imageNumber++;
            }
            else {
                imageNumber = 0;
                image.src = myimage[imageNumber];
                imageNumber++;
            }
            var t = setTimeout("rotate(" + imageNumber + ")", time);
        }
 
    </script>
</head>

<body onload="rotate(0);">

    
    
    <div align="middle" >
        <img src="image1.jpg" id="rotator" height="450" width="600"  />        
    </div>
     	
	
	
</body>

</html>