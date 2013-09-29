<?php



	
	include "libchart/classes/libchart.php";
	header("Content-type: image/png");

	$chart = new VerticalBarChart();

	$dataSet = new XYDataSet();
	$dataSet->addPoint(new Point("Employee 1", 50));
	$dataSet->addPoint(new Point("Employee 2", 40));
	$dataSet->addPoint(new Point("Employee 3", 30));
	$dataSet->addPoint(new Point("Employee 4", 35));
	$dataSet->addPoint(new Point("Employee 5", 45));
	$dataSet->addPoint(new Point("Employee 6", 15));
	$dataSet->addPoint(new Point("Employee 7", 10));
	$chart->setDataSet($dataSet);

	$chart->setTitle("Employee Performance for year 2013");
	// $chart->render("demo/a.png");
	$chart->render();
	
?>
