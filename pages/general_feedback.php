<?php
require_once 'db.php';

class User extends db{
    public function feedback(){
        // Get input values from $_POST
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        // Validate name
        $name_err = "";
        if (empty($name)) {
            $name_err = "Please enter your name";
        } elseif (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $name_err = "Only letters and white space allowed in name";
        }

        // Validate email
        $email_err = "";
        if (empty($email)) {
            $email_err = "Please enter your email";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_err = "Invalid email format";
        }

        // Validate phone
        $phone_err = "";
        if (empty($phone)) {
            $phone_err = "Please enter your phone number";
        } elseif (!preg_match("/^[0-9]+$/", $phone)) {
            $phone_err = "Only numbers allowed for phone number";
        }

        // Validate message
        $message_err = "";
        if (empty($message)) {
            $message_err = "Please enter your message";
        }

        // Check for errors
        if (!empty($name_err) || !empty($email_err) || !empty($phone_err) || !empty($message_err)) {
            // Display errors
            echo "<script>alert('$name_err\\n$email_err\\n$phone_err\\n$message_err')</script>";
			echo "<script>window.location = 'indexProjects.php';</script>";
			
        } else {
            // Process form data here				
            $query = 'INSERT INTO cpms_project.general_feedback (name, message, email, phone) VALUES (?, ?, ?, ?)';
            $pdo = $this->connect()->prepare($query);
            $pdo->execute(array($name, $message, $email, $phone));
            echo "<script>alert('Submitted')</script>";
            header("location:indexProjects.php");
        }
    }
}

// Create User object
$user = new User();

// Check if form was submitted
if (isset($_POST['save'])) {
    $user->feedback();
}
?>
