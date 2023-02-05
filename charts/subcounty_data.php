<?php
//header('Content-Type: application/json');

$conn = mysqli_connect("localhost","root","","cpms_project");

$sqlQuery = "select DISTINCT location from projects";

$locations = mysqli_query($conn,$sqlQuery);

$realLocations = [];

$data = [];
foreach ($locations as $location) {
	$realLocation=  $location['location'];
	array_push($realLocations,$realLocation);

	$query = "select * from projects where location = '".$location['location']."'";
	$count = mysqli_query($conn,$query);
	$realCount = $count->num_rows;
	array_push($data, $realCount);
}
//select DISTINCT location from projects;
//select count(*)  from projects where location = 'jacaranda';
mysqli_close($conn);

$ret = ['locations'=>$realLocations, 'data'=>$data];


echo json_encode($ret);
?>