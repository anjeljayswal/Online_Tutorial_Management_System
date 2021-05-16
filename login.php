<?php
session_start();
	DEFINE ('user', 'root');
	DEFINE ('password', ' ');
	DEFINE ('dbname', 'onlinetut');
	DEFINE ('dbhost', 'localhost:3308');
	


$db = mysqli_connect(dbhost, user, password, dbname);

if(isset($_POST['login'])){
    
    $uemail=$_POST['email'];
    $password=$_POST['password'];
	$role=$_POST['usertype'];
	
	$sql="select * from userslist where email='".$uemail."'AND password='".$password."' AND role='".$role."' ";
	
	 $result=mysqli_query($db, $sql);
		$run= mysqli_num_rows($result);
    if(mysqli_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Login Page</title>
        <!--css-->
        <link href="css/mystyle.css" rel="stylesheet" type="text/css"/>
        <link href="css/mystyle.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
            body{
				background-image:url("home.jpg");
				
		   
            }
        </style>
    </head>
    <body>
         <!--//navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark primary-background">
    <a class="navbar-brand" href="index.php"><span class="fa fa-asterisk"> </span>Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
          <a class="nav-link" href="aboutus.php"><span class="fa fa-bell-o"></span>About Us <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="fa fa-check-square-o"></span> Courses
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="java video.php">Java</a>
          <a class="dropdown-item" href="cturorial.php">Python</a>
          <a class="dropdown-item" href="#">Dotnet</a>
          <a class="dropdown-item" href="#">Social</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php"><span class="fa fa-user-circle  text-white"></span>Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signup.php"><span class="fa fa-user-plus  text-white"></span>Signup</a>
      </li>
	   <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="fa fa-check-square-o"></span> Register
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="adminregister.php">Admin</a>
		  <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="teachreg.php">Teacher</a>
          
          
        </div>
      </li>
      
    </ul>
      </div>
</nav>
        
	  
       
        <main class="d-flex align-items-center background-image" style="height: 94vh">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <div class="card">
                            <div class="card-header primary-background text-black text-center">
                                <span class="fa fa-user-circle fa-3x"></span>
                                
                                <p>Login Here</p>
                                
                                
                            </div>
                            
                             
                            
                            <div class="card-body">
                                                                
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input name="email" required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                         <label for="exampleInputPassword1">Password</label>
                                         <input name="password" required type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                </div>
                                    
                                    <div class="form-group">
                                        <form class="form-inline">
                                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">USERTYPE</label>
                                        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="usertype">
                                            <option selected name="usertype">Usertype</option>
                                            <option value="Teacher" name="usertype">Teacher</option>
                                            <option value="Admin" name="usertype">Admin</option>
                                            <option value="Student" name="usertype">Student</option>
                                        </select>
                                    </div>
                                   
										<p class="text-center">
										
										</p>  
                                    <div class="container text-center">
                                        <button type="submit" name="login" class="btn btn-primary">Login</button>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </main>
        
         <!--javascript-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="js/myjs.js" type="text/javascript"></script>
        <script>
            
        </script>
    </body>
</html>
