
<?php
require_once 'db2.php';
class User extends db2{
	
	 public function adminLogin(){
	 	// echo 'here';
	 	$username = $_POST['username'];
	 	$password = $_POST['password'];
	 	

	 	
	 	
	 	$query = 'SELECT *FROM cpms_project.admin WHERE username=? AND password=?';
	 	$pdo = $this->connect()->prepare($query);
	 	$pdo->execute(array($username, $password));
	 	if ($pdo->rowCount()==1) {
	 		header("location:index.php");
	 	}else{
	 		header("location:../index.php");
	 	}
	 	


	 }		

}
// echo count($_POST);
//Database class object and calling submit records
         $user=new User();

		if (isset($_POST['login'])) {
			// echo "here in";
			// print_r($_POST);
			$user->adminLogin();
			
            }


?>