<?php 
	session_start();
	DEFINE ('user', 'root');
	DEFINE ('password', ' ');
	DEFINE ('dbname', 'onlinetut');
	DEFINE ('dbhost', 'localhost:3308');
	
	//initializing variables
	$name="";
	$userid= "";
	$password="";
	$dept= "";
	$gender="";
	$role="";
	$email="";
	$errors = array();
	
	//connect to the database
	$db = mysqli_connect(dbhost, user, password, dbname);
	
	//Register USER
	if(isset($_POST['create'])){
		//receive all input values from the form
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		$gender = mysqli_real_escape_string($db, $_POST['gender']);
		$dept = mysqli_real_escape_string($db, $_POST['dept']);
		$role = mysqli_real_escape_string($db, $_POST['role']);
		$userid = mysqli_real_escape_string($db, $_POST['userid']);
		
	}
	
	
	// finally, register user if there are no errors in the form
	if(count($errors) == 0){
		$query = "INSERT INTO users (username, email, password, gender,  role, dept, userId ) VALUES('$name', '$email', '$password', '$gender', '$dept','$role', '$userid'    )";
		mysqli_query($db, $query);
		
	}
?>
