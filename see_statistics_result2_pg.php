<?php
session_start();

 include "libchart/classes/libchart.php";
	header("Content-type: image/png");
	
	//all this for 1st employee id
	$con = mysqli_connect("localhost","root","3rdmarch","real_estate");
	$sql= "select in_year_2013 from employee_performance where emp_id='".$_POST['empid_perform1']."';";
	$query= mysqli_query($con,$sql);
	$row1=mysqli_fetch_row($query);
	$performance =$row1[0];
	
	//all this for second employee id
    $sql2= "select in_year_2013 from employee_performance where emp_id='".$_POST['empid_perform2']."';";
    $query2= mysqli_query($con,$sql2);
	$row2=mysqli_fetch_row($query2);
	$performance2 =$row2[0];	

	//all this for third employee id
	$sql3= "select in_year_2013 from employee_performance where emp_id='".$_POST['empid_perform3']."';";
    $query3= mysqli_query($con,$sql3);
	$row3=mysqli_fetch_row($query3);
	$performance3 =$row3[0];	
	
	//all this for fourth employee id
	$sql4= "select in_year_2013 from employee_performance where emp_id='".$_POST['empid_perform4']."';";
    $query4= mysqli_query($con,$sql4);
	$row4=mysqli_fetch_row($query4);
	$performance4 =$row4[0];	
	
	//all this for fifth employee id
	$sql5= "select in_year_2013 from employee_performance where emp_id='".$_POST['empid_perform5']."';";
    $query5= mysqli_query($con,$sql5);
	$row5=mysqli_fetch_row($query5);
	$performance5 =$row5[0];	
	
	
	 $chart = new HorizontalBarChart(1000,600);
	 
	 $dataSet = new XYDataSet();
	$dataSet->addPoint(new Point($_POST['empid_perform1'], $performance));
	$dataSet->addPoint(new Point($_POST['empid_perform2'], $performance2));
	$dataSet->addPoint(new Point($_POST['empid_perform3'], $performance3));
	$dataSet->addPoint(new Point($_POST['empid_perform4'], $performance4));
	$dataSet->addPoint(new Point($_POST['empid_perform5'], $performance5));
	
	$chart->setDataSet($dataSet);

	$chart->setTitle("Employee Performance for year 2013");
	
	$chart->render();
	
	
	 mysqli_close($con);
?>