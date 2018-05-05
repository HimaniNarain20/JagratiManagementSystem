<?php

session_start(); 
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){}
?>




<!DOCTYPE HTML>
<!--
	JAGRATI WEBSITE
    BY
    MAHAJAN REVATI
    HIMANI NARAIN
    GARIMA KARNWAL
-->
<html>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Dancing+Script');
        @import url('https://fonts.googleapis.com/css?family=Gentium+Book+Basic');
        @import url('https://fonts.googleapis.com/css?family=Bad+Script');
        @import url('https://fonts.googleapis.com/css?family=Prosto+One');
        @import url('https://fonts.googleapis.com/css?family=Alegreya+Sans+SC');
        @import url('https://fonts.googleapis.com/css?family=Special+Elite');
        @import url('https://fonts.googleapis.com/css?family=Acme');
        @import url('https://fonts.googleapis.com/css?family=Comfortaa');
         div.main-heading
        {
           font-size:30px;
/*         font-family: 'Dancing Script', cursive;*/
              font-family: 'Bad Script', cursive; 
        }
        h1.animate-box
        {
          font-size:200px;
           font-family: 'Gentium Book Basic', serif; 
        }
         h2.animate-box
        {
            
            font-size:80px;
     font-family: 'Bad Script', cursive;
        }
        h3.contact_us
        {
          font-family: 'Acme', sans-serif;  
        }
        p.contact_info
        {
            font-family: 'Comfortaa', cursive;
        }
       
    </style>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Jagrati &mdash; An Initiative By IIITians</title>
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

	<!-- <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet"> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
    <body>
        
        
        	<div class="gtco-loader"></div>
	
	<div id="page">
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 text-right gtco-contact">
					<ul class="">
						<li><a href="http://jagrati.iiitdmj.ac.in"><i class="ti-mobile"></i> &nbsp Webpage </a></li>
						<li><a href="https://www.facebook.com/JAGRATI.IIITDMJ/"><i class="ti-facebook"></i> &nbsp Facebook Page</a></li>
                        <?php
						if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){
							echo '<li><a href="volunteer_front_page.php"><i class="ti-user"></i> &nbsp User</a></li>';
						} 
						else{
                        echo '<li><a href="login_form.php"><i class="ti-user"></i> &nbsp Login </a></li>';
                    }
                    ?>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4 col-xs-12">
                    <div class="main-heading"><a href="index.php"><b> Jagrati - An IIIT Initiative BY IIITians <em>.</em></b></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="activities.php">Activities</a></li>						
						<li class="active"><a href="contact.php">Contact</a></li>
<!--
                        <li class="has-dropdown"><a href="">Volunteer's Page</a>
                        <ul class='dropdown'>
                            <li><a href="">Volunteers</a></li>
                            <li><a href="">Student</a></li>
                            <li><a href="">Timetable </a></li>
                        </ul>
                        </li>
-->
					</ul>
				</div>
			</div>
			
		</div>
	</nav>
       <header id="gtco-header" class="gtco-cover" role="banner" style="background-image:url(../images/background.jpeg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					<div class="display-t">
						<div class="display-tc">
							<h1 class="animate-box" data-animate-effect="fadeInUp">JAGRATI</h1>
                            <h2 class="animate-box" data-animate-effect="fadeInUp"><b>A child without education is like a bird wihtout wings <br>Gives a way of changing lives of needy children</b></h2>
                            <!-- add link to sign up page? -->
                            <p class="animate-box" data-animate-effect="fadeInUp"><a href="login_form.php" class="btn btn-white btn-lg btn-outline"><b><font size="5">Join Us</font></b></a></p>
						</div>
					</div>
				</div>
			</div>
        </div>
           
           
           
           
           
           
           
           
           
           		<div class="gtco-container">
			<div class="row row-p	b-md">

				<div class="col-md-4">
					<div class="gtco-widget">
                        <center><h3 class="contact_us"><font color="#fffaf0" size="6">Thank You For Visiting Us</font></h3>
                            <p class="contact_info"><font color="#fff68f"><i>Sometimes a small thing you can do mean everything in another person's life!!!We are serving our nation at a superior level as darkness of each kind can be removed by the light of education.

                                Our team is trying to explore the idea of Jagriti and many students studying in different institutes have aquired the idea of doing great deeds.</i></font></p></center>
					</div>
				</div>

				<div class="col-md-4 col-md-push-1">
					<div class="gtco-widget">
                        
                     <center>   <h3 class="contact_us"> <font color="#fffaf0" size="6">It's Your Turn</font></h3>
						<ul class="gtco-footer-links" style="list-style-type:none">
                            <li><a href="#"><b>Please Donate From Your Side<b></a></li>
							<li><a href="#">Account Name:</a></li>
                            <li><a href="#">JAGRATI</a></li>
                            <li><a href="#">Bank Account:</a></li>
                            <li><a href="#">50267810033</a></li>
                            <li><a href="#">IFSC Code:</a></li>
                            <li><a href="#">ALLA0212433</a></li>
                            <li><a href="#">Jagrati Team
                                            pdpm iiitdmj 
                                            Jablpur Madhya Pradesh 
                                            PIN:482005</a></li>
						
                                </ul></center>
					</div>
				</div>

				<div class="col-md-4">
					<div class="gtco-widget">
                        <center>		<h3 class="contact_us"><font color="#fffaf0" size="6">Want To Reach Us???</font></h3>
						<ul class="gtco-quick-contact" style="list-style-type:none">
							<li><a href="#"><i class="icon-phone"></i> Our Address</a></li>
							<li><a href="#"><i class="icon-mail2"></i>JAGRATI TEAM,PDPM IIITDM JABALPUR,MADHYA PRADESH </a></li>
                            <li><a href="#"><i class="icon-phone"></i> + 9479 877 619</a></li>
							<li><a href="#"><i class="icon-mail2"></i>jagrati@iiitdmj.ac.in </a></li>
                            <li><a href="#"><i class="icon-mail2"></i>jagrati.iiitdmj.ac.in </a></li>
                    </ul></center>
					</div>
				</div>

			</div>

		</div>
	</header>
        <footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
			<div class="row row-p	b-md">

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>About Us</h3>
						<p>You must not lose faith in humanity. Humanity is an ocean; if a few drops of the ocean are dirty, the ocean does not become dirty.</p>
					</div>
				</div>

				<div class="col-md-4 col-md-push-1">
					<div class="gtco-widget">
						<h3>Links</h3>
						<ul class="gtco-footer-links">
							<li><a href="#">Facebook Page</a></li>
							<li><a href="#">Institute Webpage</a></li>
							
						</ul>
					</div>
				</div>

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>Get In Touch</h3>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i class="icon-phone"></i> +91 9425720146 </a></li>
							<li><a href="#"><i class="icon-mail2"></i> 2016107@iiitdmj.ac.in </a></li>
						</ul>
					</div>
				</div>

			</div>

		</div>
	</footer>
        </div>
       
        	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

    </body>
</html>