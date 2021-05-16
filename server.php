<?php 
	session_start();
	DEFINE ('user', 'root');
	DEFINE ('password', ' ');
	DEFINE ('dbname', 'onlinetut');
	DEFINE ('dbhost', 'localhost:3308');
	
	//initializing variables
	$username="";
	$email= "";
	$password="";
	$course= "";
	$gender="";
	$role="";
	$errors = array();
	
	//connect to the database
	$db = mysqli_connect(dbhost, user, password, dbname);
	
	//Register USER
	if(isset($_POST['create'])){
		//receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		$course = mysqli_real_escape_string($db, $_POST['course']);
		$gender = mysqli_real_escape_string($db, $_POST['gender']);
			$role = mysqli_real_escape_string($db, $_POST['role']);
		
		
	}
	
	
	// finally, register user if there are no errors in the form
	if(count($errors) == 0){
		$query = "INSERT INTO users (username, email, password, course, gender, role) VALUES('$username', '$email', '$password', '$course', '$gender','$role')";
		mysqli_query($db, $query);
		//$_SESSION['username']= $username;
		//$_SESSION['success'] ="You are now logged in";
		//header('location: index.php');
	}
?>