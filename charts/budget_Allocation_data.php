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
	$result = mysqli_query($conn,$query);

	$row = $result -> fetch_array(MYSQLI_NUM);
	$row2 = $row[8];
	array_push($data, $row2);
}
//select DISTINCT location from projects;
//select count(*)  from projects where location = 'jacaranda';
mysqli_close($conn);

$ret = ['departments'=>$realDepartments, 'data'=>$data];


echo json_encode($ret);
?>