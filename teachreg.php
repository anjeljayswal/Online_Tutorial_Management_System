<?php
include('connection.php');
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Teacher Register</title>
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
<div id="menu-wrapper">
	<div id="menu">
           <li style="text-align: left;font-size: 20px; color: lightcoral;font-family: cursive">Welcome Admin</li>
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
						<h2 class="title">Teacher register</h2>

						<div style="clear: both;"></div>
						<div class="entry">
							<div align="center">
							  <form action="teachreg.php" method="post">
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
                              <td>Email </td><td> <input type="email" id="temail" name="email" required=""/></td>
                              </tr>
                              <tr id="btna">
                              <td> 
							  <button type="submit" class="btn btn-primary" name="creates">Add</button>
							  
							  </td>
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