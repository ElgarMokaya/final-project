<?php
//header('Content-Type: application/json');

$conn = mysqli_connect("localhost","root","","cpms_project");

$sqlQuery = "select DISTINCT status from projects";

$statuses = mysqli_query($conn,$sqlQuery);

$realStatuses = [];

$data = [];
foreach ($statuses as $status) {
	$realStatus=  $status['status'];
	array_push($realStatuses,$realStatus);

	$query = "select * from projects where status = '".$status['status']."'";
	$count = mysqli_query($conn,$query);
	$realCount = $count->num_rows;
	array_push($data, $realCount);
}
//select DISTINCT location from projects;
//select count(*)  from projects where location = 'jacaranda';
mysqli_close($conn);

$ret = ['statuses'=>$realStatuses, 'data'=>$data];


echo json_encode($ret);
?>