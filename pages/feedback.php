
<?php
require_once 'db.php';
class User extends db{
	
	 public function feedback(){
	 	// echo 'here';
	 	 $name = $_POST['name'];
	 	 $message = $_POST['message'];
	 	 $email = $_POST['email'];
		 $password=$_POST['password'];
	 	$phone = $_POST['phone'];
	 	 $project_id = $_GET['pid'];
	 	

	 	
	 	
	 	$query = 'INSERT INTO cpms_project.citizen (name, message,email, phone, project_id,password) VALUES (?, ?, ?, ?, ?)';
	 	$pdo = $this->connect()->prepare($query);
	 	$pdo->execute(array($name, $message, $email,$phone, $project_id,$password));
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