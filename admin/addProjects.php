
<?php
require_once 'db2.php';
class User extends db2{
	
	 public function Addproject(){
	 	// echo 'here';
	 	$project = $_POST['project'];
	 	//dd($project);

	 	$department = $_POST['department'];
	 	//print_r($_POST['department']);
	 	$ward = $_POST['ward'];
	 	$location = $_POST['location'];
	 	$status = $_POST['status'];
	 	$FY = $_POST['FY'];
	 	$budget = $_POST['budget'];
	 	$source_of_funds = $_POST['source_of_funds'];
	 	$implementing_agency = $_POST['implementing_agency'];
	 	$remarks = $_POST['remarks'];
	 	

	 	
	 	
	 	$query = 'INSERT INTO cpms_project.projects (project, department,ward, location,status,FY,budget, source_of_funds,implementing_agency,remarks) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
	 	$pdo = $this->connect()->prepare($query);
	 	$pdo->execute(array($project, $department, $ward, $location, $status, $FY, $budget, $source_of_funds, $implementing_agency, $remarks));
	 	header("location:index.php");


	 }		

}
// echo count($_POST);
//Database class object and calling submit records
         $user=new User();

		if (isset($_POST['action'])) {
			// echo "here in";
			// print_r($_POST);
			$user->Addproject();
            }


?>