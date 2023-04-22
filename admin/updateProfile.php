<?php
require_once 'db2.php';

class User extends db2 {
	
	 public function UpdateProfile() {
	 	$username = $_POST['username'];
	 	$id = $_POST['user_id'];
	 	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	 	
	 	if(empty($username) || empty($password)) {
			echo "<script>alert('Please enter both username and password')</script>";
			return;
		}
		
	 	$query = "UPDATE admin SET username = '$username', password= '$password' WHERE ID = '$id'";
	 	$pdo = $this->connect()->prepare($query);
		$exec = $pdo->execute();
	 	if($exec){
             echo "<script>alert('Profile updated successfully')</script>";
             echo "<script>window.location = 'index.php';</script>";
            } else {
            echo "<script>alert('Failed')</script>";
        }
	 	
	 }		

}

$user = new User();

if (isset($_POST['action'])) {
	$user->UpdateProfile();
}

?>
