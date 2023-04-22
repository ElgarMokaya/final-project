<?php
session_start(); // start the session

require_once 'db2.php';

class User extends db2 {
	
	public function adminLogin() {
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$query = 'SELECT * FROM cpms_project.admin WHERE username=?';
		$pdo = $this->connect()->prepare($query);
		$pdo->execute(array($username));
		
		if ($pdo->rowCount() == 1) {
			$row = $pdo->fetch(PDO::FETCH_ASSOC);
			$hashed_password = $row['password'];
			$id = $row['id'];

			if (password_verify($password, $hashed_password)) {
				// Create a session variable to store the user's information
				$_SESSION['username'] = $username;
				$_SESSION['id'] = $id;
				
				header("location:index.php");
			} else {
				echo "<script>alert('Invalid username or password')</script>";
				echo "<script>window.location = './../index.php';</script>";
			}
		} else {
			header("location:../index.php");
		}
	}
}


$user = new User();

if (isset($_POST['login'])) {
	$user->adminLogin();
}
?>
