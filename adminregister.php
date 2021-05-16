<?php
include('connection.php');
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Admin Register</title>
		<!--css-->
		<link rel=""stylesheet" href="style1.css">
          
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


		

       

</head>
<body >
<style>
body{
				background-image:url("home.jpg");
				
		   
            }
			
			* {
  box-sizing: border-box;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
</style><!--javascript-->

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
      
	 
	  
    </ul>
    
  </div>
</nav>

	<div id="menu-wrapper">
	<div id="menu">
           <li style="text-align: left;font-size: 20px; color: lightcoral;font-family: cursive">Welcome Super Admin</li>
		<ul style="text-align-last:left">
			<li><a href="login.php">Logout</a></li>
		</ul>
	</div>
	<!-- end #menu -->
</div>
<div id="header-wrapper"></div>

	<!-- end #header -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<div class="post">
					<div align="center">
						<h2 class="title">Admin register</h2>

						<div style="clear: both;"></div>
						<div class="entry">
							<div align="center">
							  <form action="adminregister.php" method="post">
							  <table>
                                                             
                              <tr>
                              <td>Name </td><td> <input type="text" name="name" id="tname" required=""/></td>
                              </tr>
                              <tr>
                              <td>UserId</td><td> <input type="text" name="userid" id="tuserid" required=""/></td>
                              </tr>
                              <tr>
                              <td>Password </td><td> <input type="text" name="password" id="tpassword" required=""/></td>
                              </tr>
                              <tr>
                              <td>Dept </td><td> <input type="text" name="dept" id="tdept" required=""/></td>
                              </tr>
                              <tr>
                              <td>Gender </td><td> <input type="text"  name="gender" id="tgender" required=""/></td>
                              </tr>
							  <tr>
                              <td>Role </td><td> <input type="text"  name="role" id="trole" required=""/></td>
                              </tr>
                              <tr>
                              <td>Email </td><td> <input type="email" id="temail" name="email" required=""/></td>
                              </tr>
                              <tr id="btna">
                              <td> 
							  <button type="submit" class="btn btn-primary" name="create">Add</button>
							  
                              </tr>
                              
                              </table>
							  
							  
							
							  
							  
			              </div>
						  
						
						</div>
				  </div>
					
				</div>
			<!-- end #content --><!-- end #sidebar --></div>
		</div>
	</div>
	<!-- end #page -->


<!-- end #footer -->



	
		<!-- Container for the image gallery -->
<div class="container">

  <!-- Full-width images with number text -->
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
      <img src="img_woods.jpg" style="width:100%" height=388px>
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
      <img src="img_5terre.jpg" style="width:100%" height=388px>
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
      <img src="img_mountains_wide.jpg" style="width:100%" height=388px >
  </div>

  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
      <img src="img_lights.jpg" style="width:100%" height=388px>
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
      <img src="img_nature_wide.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
      <img src="img_snow_wide.jpg" style="width:100%">
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  <!-- Image text -->
  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <!-- Thumbnail images -->
  <div class="row">
    <div class="column">
      <img class="demo cursor" src="img_woods.jpg" style="width:100%" onclick="currentSlide(1)" alt="“Go where you feel most alive.”">
    </div>
    <div class="column">
      <img class="demo cursor" src="img_5terre.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre, meaning “Five Lands”, is located in the Liguria region of Italy and is made up of 5 villages">
    </div>
    <div class="column">
      <img class="demo cursor" src="img_mountains.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords:These regions serve as important transition areas between the land and sea environments and provide habitat not only for humans.">
    </div>
    <div class="column">
      <img class="demo cursor" src="img_lights.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights:The northern lights, one of several astronomical phenomena called polar lights (aurora polaris), are shafts or curtains of colored light visible on occasion in the night sky. ... Northern lights are also called by their scientific name, aurora borealis, and southern lights are called aurora australis.">
    </div>
    <div class="column">
      <img class="demo cursor" src="img_nature.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
    </div>
    <div class="column">
      <img class="demo cursor" src="img_snow.jpg" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
    </div>
  </div>
</div>
        
						  
						  <script>
							var list1=[];
							var list2=[];
							var list3=[];
							var list4=[];
							var list5=[];
							var list6=[];
							 var n = 1;
							 var x = 0;
							 function AddRow(){
							 var AddRown = document.getElementById('show');
							 var NewRow = AddRown.isertRow(n);
							 
							 list1[x] = document.getElementById("tname").value;
							 list2[x] = document.getElementById("tuserid").value;
							 list3[x] = document.getElementById("tpassword").value;
							 list4[x] = document.getElementById("tdept").value;
							 list5[x] = document.getElementById("tphno").value;
							 list6[x] = document.getElementById("temail").value;
							 
							 var ce11=NewRow.insertCell(0);
							 var ce12=NewRow.insertCell(1);
							 var ce13=NewRow.insertCell(2);
							 var ce14=NewRow.insertCell(3);
							 var ce15=NewRow.insertCell(4);
							 var ce16=NewRow.insertCell(5);
							 
							 cel1.innertHTML=list1[x];
							 cel2.innertHTML=list2[x];
							 cel3.innertHTML=list3[x];
							 cel4.innertHTML=list4[x];
							 cel5.innertHTML=list5[x];
							 cel6.innertHTML=list6[x];
							 
							 n++;
							 x++;
							 }
							 
							 
							 
							 
							 var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}

						  </script>
 
</body>

</html>