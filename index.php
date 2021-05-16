

<!DOCTYPE html>
<html>
    <head>
<meta charset="UTF-8">     
	 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Home Page</title>
        <!--css-->
        <link href="css/mystyle.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      
    </head>
    <body>
	
	  <style>
           body{
				background-image:url("css.jpeg");
				
		   } 
		   *,*:before,*:after{
				box-sizing:border-box;
			}
			body{
				font-family:poppins;
				margin:0;
				display:grid;
				font-size:14px;
			}
			main{
				display: -webkit-flex;
				display: -moz-flex;
				display: -ms-flex;
				display: -o-flex;
				align-item:center;
				justify-content: center;
				color: #9b9b9b;
				line-height: 3.8;
				font-size: 80px;
				text-transform: uppercase;
				font-weight: bold;
			}
			footer{
				display: -webkit-flex;
				display: -moz-flex;
				display: -ms-flex;
				display: -o-flex;
				display: flex;
				flex-flow: row wrap;
				padding: 50px;
				color: #fff;
				background-color: #011c39;
			}
			.footer > *{
				flex: 1 100%;
			}
			.footer-left{
				margin-right:1.25em;
				margin bottom: 2em;
				
			}
			.footer-left img{
				width: 500;
			}
			h2{
				font-weight:600;
				font-size: 17px;
			}
			.footer ul{
				list-style: none;
				padding-left: 0;
			}
			.footer li{
				line-height:2em;
			}
			.footer a{
				text-decoration: none;
			}
			.footer-right{
				display: -webkit-flex;
				display: -moz-flex;
				display: -ms-flex;
				display: -o-flex;
				display: flex;
				flex-flow: row wrap;
			}
			.footer-right > *{
				flex: 1 50%;
				margin-right:1.25em;
			}
			.box a{
				color: #999;
			}
			.footer-bottom{
				text-align: center;
				color: #999;
				padding-top: 50px;
			}
			.footer-left p{
				padding-right:20%;
				color : #999;
			}
			.socials a{
				background: #364a62;
				width: 40px;
				height: 40px;
				display: inline-block;
				margin-right:10px;
			}
			.socials a i{
				color: #e7f2f4;
				padding:10px 12px;
				font-size: 20px;
			}
			@media screen and (min-width: 600px){
				.footer-right > *{
					flex: 1;
				}
				.footer-left{
					flex: 1 0px;
				}
				.footer-right{
					flex: 2 0px;
				}
			}
			@media (max-width:600px){
				.footer{
					padding:15px;
				}
				main{
					font-size:55px;
				}
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
        </style>
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
        
        <!--//banner-->
        <div class="container-fluid p-0 m-0 background-image " style="height: 190vh">
        
           
                <div class="container">
            
                <div class="container">
                    <h3 class="display-3" ><marquee>Welcome To online tutorial</marquee></h3>
                    <p style= "text-shadow:4px 4px 8px pink;">Welcome to online class.eLEARNING: eLearning (short for electronic learning) is an umbrella term that refers to all types of training, education and instruction that occurs on a digital medium, like a computer or mobile phone. HYBRID LEARNING: See blended learning.
                    </p>
                    <p>Mostly used in the world </p>
                    <a href="signup.php" class="btn-outline-light btn-lg"><span class="fa fa-user-plus"></span>Signup</a>
                    
                    <a href="login.php" class="btn-outline-light btn-lg"><span class="fa fa-user-circle fa-spin"></span>Login</a>
                    
                </div>
                
            
        </div>
            <br>
            <br>
            <br>
            
        
        
        
        <!--//cards-->
        <div class="container">
            <div class="row mb-2">
                <div class="col-md-4">
                    <div class="card" >
                      <div class="card-body">
                        <h5 class="card-title">Java</h5>
                        <p  class="card-text" style= "text-shadow:4px 4px 8px pink;">Java is a class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible.</p>
                        <a href="#" class="btn primary-background text-white">Read More</a>
  </div>
</div>
                    
                </div>
                <div class="col-md-4">
                    <div class="card" >
                      <div class="card-body">
                        <h5 class="card-title">Python</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn primary-background text-white">Read More</a>
  </div>
</div>
                    
                </div>
                <div class="col-md-4">
                    <div class="card" >
                      <div class="card-body">
                        <h5 class="card-title">Dotnet Programing Langauge</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn primary-background text-white">Read More</a>
                       </div>
                    </div>
                </div>
                
                                    
                               
            </div>
            
           
        </div>
		
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

		
        </div>

		<footer class="footer">
			<div class="footer-left">
				<img src="maxresdefault.jpg" alt="">
				<p> JAIT solution counts on one of the fastest moving web development and completes suite of software development, Android and IOS app development, Computer training and SEO together with offering different IT-related training courses!</p>
				<div>
					<a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
					<a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
					<a href=""><i class="fa fa-dribbble"></i></a>
					<a href="https://youtube.com/"><i class="fa fa-youtube"></i></a>
					<a href="https://www.tumblr.com/"><i class="fa fa-tumblr"></i></a>
				</div>
			</div>
			<ul class="footer-right">
				<li>
					<h2>  Product</h2>
					<ul class="box">
						<li><a href="#">Theme Design</a></li>
						<li><a href="#">Plugin Design</a></li>
						<li><a href="#">Wordpress</a></li>
						<li><a href="#">Jooma Yempalte</a></li>
						<li><a href="#">HTML Template</a></li>
					</ul>
				</li>
				
				<li class="features">
					<h2>Useful Links</h2>
					<ul class="box">
						<li><a href="index.php">Home</a></li>
						<li><a href="login.php">Login</a></li>
						<li><a href="signup.php">Signup</a></li>
					</ul>
				</li>
				
				<li>
					<h2>Address</h2>
					<ul class="box">
						<li><a href="https://www.google.com/maps/place/Birgunj/@27.0474286,84.8029716,12z/data=!3m1!4b1!4m5!3m4!1s0x39935446b21c98cb:0x42938e30ff4f6cb5!8m2!3d27.0449005!4d84.8672171">Birgunj</a></li>
						<li><a href="https://www.google.com/maps/place/Nepal/@28.3236393,79.6362605,6z/data=!3m1!4b1!4m5!3m4!1s0x3995e8c77d2e68cf:0x34a29abcd0cc86de!8m2!3d28.394857!4d84.124008">Nepal</a></li>
						<li><a href="https://www.google.com/maps/search/united+nation/@28.3463317,84.1219528,7.01z">United Nation</a></li>
					</ul>
				</li>
			</ul>
			<div>
				<p>All Right reserved by &copy;JAIT Solution 2021</p>
			</div>
		
		</footer>
        
        
        <!--javascript-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
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
