<?php

require_once "connection.php";

$message = "";
$role = "";
if(isset($_POST["btnLogin"]))
{
	$username = $_POST["username"];
	$password = $_POST["password"];
	//$usertype = $_POST['usertype']
	
	$query = "SELECT * FROM teacher WHERE email='$email' AND password='$password'";
	$result = mysqli_query($con,$query);
	if(mq;ibase_num_rows($result) >0)
	{
		while($row = mysqli_fetch_assoc($result))
		{
		//$role = $row["Role"];
		}
	}
	else
	{
		$message = "Invalid Username or Password";
	}
}
?>
//first check the dtbase to make sure
	//a user does not already exxits with the same username and/or email
	$user_check_query= "SELECT * FROM student WHERE username='$username' OR email='$email' LIMIT 1";
	$result = mysqli_query($db, $user_check_query);
	$user = mysql_fetch_assoc($result);
	
	if($user){ // if user exits
		if($user['name']===$username){
			array_push($errors, "email already exists");
		}
		
	}