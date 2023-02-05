<?php
//header('Content-Type: application/json');

$conn = mysqli_connect("localhost","root","","cpms_project");

$sqlQuery = "select DISTINCT ward from projects";

$wards = mysqli_query($conn,$sqlQuery);

$realWards = [];

$data = [];
foreach ($wards as $ward) {
	$realWard=  $ward['ward'];
	array_push($realWards,$realWard);

	$query = "select * from projects where ward = '".$ward['ward']."'";
	$count = mysqli_query($conn,$query);
	$realCount = $count->num_rows;
	array_push($data, $realCount);
}
//select DISTINCT location from projects;
//select count(*)  from projects where location = 'jacaranda';
mysqli_close($conn);

$ret = ['wards'=>$realWards, 'data'=>$data];


echo json_encode($ret);
?>