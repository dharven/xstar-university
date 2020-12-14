<?php
  //creating connection to database
$con=mysqli_connect("localhost","root","","xstar") or die(mysqli_error());
  //check whether submit button is pressed or not
if((isset($_POST['submit'])))
{
  //fetching and storing the form data in variables
$Name = $con->real_escape_string($_POST['name']);
$Email = $con->real_escape_string($_POST['email']);
$subject = $con->real_escape_string($_POST['subject']);
$text = $con->real_escape_string($_POST['text']);
  //query to insert the variable data into the database
$sql="INSERT INTO contact (name, email, subject, message) VALUES ('".$Name."','".$Email."', '".$subject."', '".$text."')";
  //Execute the query and returning a message
if(!$result = $con->query($sql)){
die('Error occured [' . $conn->error . ']');
}
else
   echo "<p align='center'> <font color=black>Thank you! We will get in touch with you soon.</font> </p>";
}


?>



<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>XSTAR University.</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />



  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<link rel="shortcut icon" href=" images/favicon.ico" type="image/x-icon" />

	<!-- Animate.css -->
	<link rel="stylesheet" href=" css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href=" css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href=" css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href=" css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href=" css/owl.carousel.min.css">
	<link rel="stylesheet" href=" css/owl.theme.default.min.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href=" css/flexslider.css">

	<!-- Pricing -->
	<link rel="stylesheet" href=" css/pricing.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href=" css/style.css">

	<!-- Modernizr JS -->
	<script src=" js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src=" js/respond.min.js"></script>
	<![endif]-->



	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href=" d/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href=" d/css/animate.css">

    <link rel="stylesheet" href=" d/css/owl.carousel.min.css">
    <link rel="stylesheet" href=" d/css/owl.theme.default.min.css">
    <link rel="stylesheet" href=" d/css/magnific-popup.css">

    <link rel="stylesheet" href=" d/css/aos.css">

    <link rel="stylesheet" href=" d/css/ionicons.min.css">

    <link rel="stylesheet" href=" d/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href=" d/css/jquery.timepicker.css">


    <link rel="stylesheet" href=" d/css/flaticon.css">
    <link rel="stylesheet" href=" d/css/icomoon.css">
    <link rel="stylesheet" href=" d/css/style.css">

	<style>
  @import url('https://fonts.googleapis.com/css?family=Ubuntu');

body {
    margin:0; font-family: 'Ubuntu', sans-serif;
    font-size:13px;
}
h3 {
    position:absolute; padding:20px;
    top:0px; left:100px; color:#379;
}
#input {
    position:relative; width:80%; left:0%;

    border:solid 2px #379;
    border-radius:0px;
    color:black; margin:0px; padding:5px;
}


#captcha {
    position:relative; width:100% height:200px;
    background-color:rgba(40,90,120,0.15);
    border-radius:4px;
    padding:10px; margin:0px;
}
#output {
    width:70%; left:10%;
    position:relative;
    border:solid 1px #379; border-radius:4px;
    background-color:rgba(40,90,120,0.15);
    padding:1px; margin-bottom:10px;
    text-align:center;
    display:none;
}
#captcha_container {
    position:relative; background-color:rgba(40,90,120,0.3);
    border-radius:4px;
    padding:15px;
}

	body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #ffffff;
}

.topnav a {
  float: left;
  color: #000000;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav-right {
  float: right;
}
a.b {
  visibility: hidden;
}
	.square_btn {
    position: relative;
    display: inline-block;
    padding: 0.5em 2em;
    text-decoration: none;
    color: #FFF;
    background: #8A2BE2;
    border-radius: 20px;
    box-shadow: inset 0 2px 0 rgba(255,255,255,0), inset 0 -2px 0 rgba(0, 0, 0, 0);
    font-weight: bold;
    border: solid 2px #8A2BE2;
}

.square_btn:active {/*on Click*/
    box-shadow: 0 0 2px rgba(0, 0, 0,0);
}
</style>
	</head>
	<body>

	<div class="fh5co-loader"></div>

	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-right">

						<p class="num">Call: +65 6516 6666</p>
						<ul class="fh5co-social">
              <li><a href="https://www.facebook.com/nus.singapore"><i class="icon-facebook2"></i></a></li>
              <li><a href="https://twitter.com/NUSingapore"><i class="icon-twitter2"></i></a></li>
              <li><a href="https://www.youtube.com/user/NUScast"><i class="icon-youtube2"></i></a></li>

						</ul>
							<a href="signin.php" style="color:blue;">Sign in</a>
					</div>
				</div>
			</div>
		</div>

	</nav>
	<div class="topnav">
<a class="b">This heading is hidden</a>
  <a style="color:black;">XSTAR UNIVERSITY</a>

  <div class="topnav-right">
    <a href="index.html">Home</a>
	<a href="about.html">About</a>
    <a href="courses.html">Courses</a>
<a href="Admission.html">Admission</a>
	<a href="teacher.html">Faculty</a>
    <a href="contact.php">Contact</a>
	<a class="b">This heading is hddd</a>
  </div>
</div>

	<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url( images/tele.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">Contact us</h1>
									<h2>Having a query/question or want to know how to apply connect with us throught your<br> e-mail and we will send you details and requirements according to your selected course.</h2>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<section class="ftco-section contact-section ftco-degree-bg">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <p style="font-size:30px">Contact Information</p>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
          <p><span>Address:</span> 21 Lower Kent Ridge Rd, Singapore 119077</p>
          </div>
          <div class="col-md-3">
            <p><span>Phone:</span> <a>+65 6516 6666</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Email:</span> <a>xstaruni@gmail.com</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Website</span> <a >xstaruniversity.com</a></p>
          </div>
        </div>

        <div class="row block-9">
          <div class="col-md-6 pr-md-5">
        <form class="form" action="" method="POST" id="captcha_form">
              <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Your Name" required>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea  name="text" cols="30" rows="7" class="form-control" placeholder="Message" required></textarea>
              </div>


              <div id="captcha_wrapper">
                <br>
                <p><strong>Captcha</strong></p>
                <div id="captcha"></div>
                <br>
                <div>
                <input type="text" id="input" placeholder="Insert Captcha" / required>
              </div>
                <br>

                <div id="output">gg</div>
                  <div id="captcha_container">
                    <input type="checkbox" id="checked" onclick="validate();"/>
                    I'm not a robot
                  </div>
                  <br>

    </div>
              <div class="form-group">

<input type="submit"  id="hi"  value="Submit"  name="submit"  class="square_btn">
						</div>
            </form>

          </div>

	<div class="col-md-6">
	    		<div class="col-md-6 ftco-animate img about-image" style="background-image: url( images/.jpg);">
	    		</div>

	<div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="400" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.6881051365194!2d103.86404591470126!3d1.3638037990053256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da16ff9311ab7b%3A0x95cb5fd353a67904!2sSerangoon%20Garden%20Way%2C%20Singapore!5e0!3m2!1sen!2sin!4v1601648774811!5m2!1sen!2sin" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://torrent9-fr.com"></a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
        </div>
	</div>
      </div>
    </section>




	<footer id="fh5co-footer" role="contentinfo" style="background-image: url( images/img_bg_4.jpg);">
		<div class="overlay"></div>
		<div class="container">


			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; Copyright © 2020, All Rights Reserved. XSTAR University.</small>

					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>


	<!-- jQuery -->
	<script src=" js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src=" js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src=" js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src=" js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src=" js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src=" js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src=" js/jquery.flexslider-min.js"></script>
	<!-- countTo -->
	<script src=" js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src=" js/jquery.magnific-popup.min.js"></script>
	<script src=" js/magnific-popup-options.js"></script>
  <script src=" js/appy.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src=" js/google_map.js"></script>
	<!-- Count Down -->
	<script src=" js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src=" js/main.js"></script>
  <script>
          function rand(captcha_str,fin){
              captcha_str="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*()_+{}:,./;][=-";
              fin=Math.floor(Math.random()*captcha_str.length);
              for(let i=0; i<5; i++){
                  fin+=captcha_str[Math.floor(Math.random()* 85)];
              }
              //console.log(captcha_str.length);
              return fin;
          }
          var doc=document.getElementById("captcha");
              doc.innerHTML=(rand());
      </script>

	<script>
    var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
	</script>
	</body>
</html>
