<?php
require_once 'db.php';
class User extends db{
	
	 public function feedback(){
	 	// echo 'here';
	 	$name = $_POST['name'];
	 	$message = $_POST['message'];
	 	$email = $_POST['email'];
	 	$phone = $_POST['phone'];
	 	

	 	
	 	
	 	$query = 'INSERT INTO cpms_project.general_feedback (name, message,email, phone) VALUES (?, ?, ?, ?)';
	 	$pdo = $this->connect()->prepare($query);
	 	$pdo->execute(array($name, $message, $email,$phone));
	 	header("location:indexProjects.php");


	 }		

}
// echo count($_POST);
//Database class object and calling submit records
         $user=new User();

		if (isset($_POST['save'])) {
			// echo "here in";
			$user->feedback();
            }


?>