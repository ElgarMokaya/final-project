<?php

include('db.php');
include("function.php");

// if(isset($_POST["user_id"]))
// {
// 	$image = get_image_name($_POST["project_id"]);
// 	if($image != '')
// 	{
// 		unlink("upload/" . $image);
// 	}
	$statement = $connection->prepare(
		"DELETE FROM projects WHERE project_id = :project_id"
	);
	$result = $statement->execute(
		array(
			':project_id'	=>	$_POST["project_id"]
		)
	);
	
	if(!empty($result))
	{
		echo 'Data Deleted';
	}




?>