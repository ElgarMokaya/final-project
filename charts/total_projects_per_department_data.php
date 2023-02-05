<?php
//header('Content-Type: application/json');

$conn = mysqli_connect("localhost","root","","cpms_project");

$sqlQuery = "select DISTINCT department from projects";

$departments = mysqli_query($conn,$sqlQuery);

$realDepartments = [];

$data = [];
foreach ($departments as $department) {
	$realDepartment=  $department['department'];
	array_push($realDepartments,$realDepartment);

	$query = "select * from projects where department = '".$department['department']."'";
	$count = mysqli_query($conn,$query);
	$realCount = $count->num_rows;
	array_push($data, $realCount);
}
//select DISTINCT location from projects;
//select count(*)  from projects where location = 'jacaranda';
mysqli_close($conn);

$ret = ['departments'=>$realDepartments, 'data'=>$data];


echo json_encode($ret);
?>