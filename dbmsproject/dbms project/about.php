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
<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Dancing+Script');
        @import url('https://fonts.googleapis.com/css?family=Gentium+Book+Basic');
        @import url('https://fonts.googleapis.com/css?family=Bad+Script');
        @import url('https://fonts.googleapis.com/css?family=Prosto+One');
        @import url('https://fonts.googleapis.com/css?family=Alegreya+Sans+SC');
        @import url('https://fonts.googleapis.com/css?family=Special+Elite');
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
        
    
    </style>
	<head>
        <title>Jagrati &mdash; An Initiative By IIITians </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        
        
        
        
        
        
        
        
        
        
        
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="keywords" content="college, campus, university, courses, school, educational">

    <meta name="description" content="IIITDMJ - College, University and campus">

    <meta name="author" content="IIIT DMJ">

   



    <!-- Favicons-->

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    

    <!-- BASE CSS -->

    <link href="http://www.iiitdmj.ac.in/css/main_font/main_font.css" rel="stylesheet">

    <link href="http://www.iiitdmj.ac.in/css/animate.min.css" rel="stylesheet"> <link href="http://www.iiitdmj.ac.in/css/bootstrap.min.css" rel="stylesheet">

    <link href="http://www.iiitdmj.ac.in/css/menu.css" rel="stylesheet">

    <link href="http://www.iiitdmj.ac.in/css/style.css" rel="stylesheet">

    <link href="http://www.iiitdmj.ac.in/css/responsive.css" rel="stylesheet">

    <link href="http://www.iiitdmj.ac.in/css/elegant_font/elegant_font.min.css" rel="stylesheet">

    <link href="http://www.iiitdmj.ac.in/css/icon_font/pe-icon-7-stroke.min.css" rel="stylesheet">

    <link href="http://www.iiitdmj.ac.in/css/fontello/css/fontello.min.css" rel="stylesheet">

    <link href="http://www.iiitdmj.ac.in/css/edu_fonts/edu_fonts.min.css" rel="stylesheet">

    <link href="http://www.iiitdmj.ac.in/css/magnific-popup.css" rel="stylesheet">

    <link href="http://www.iiitdmj.ac.in/css/custom.css" rel="stylesheet">



    <!-- SPECIFIC CSS -->

    <link href="http://www.iiitdmj.ac.in/css/tour.css" rel="stylesheet">

    

    <!-- Uncomment to change color scheme <link href="css/tour-green.css" rel="stylesheet"> -->

    <!-- Uncomment to change color scheme <link href="css/tour-purple.css" rel="stylesheet"> -->

    <!-- Uncomment to change color scheme <link href="css/tour-red.css" rel="stylesheet"> -->

    

    <!-- Modernizr -->

	<script src="http://www.iiitdmj.ac.in/js/modernizr_tour.js"></script> 



    <!--[if lt IE 9]>

      <script src="js/html5shiv.min.js"></script>

      <script src="js/respond.min.js"></script>

    <![endif]-->




        
        
        
        
        
        
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
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
                    <div class="main-heading"><a href="index.php"> <b>Jagrati - An Initiative BY IIITians<em>.</em></b></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li class="active"><a href="about.php">About</a></li>
						<li><a href="activities.php">Activities</a></li>
						<li><a href="contact.php">Contact</a></li>
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
                            <a href="index.php"><font color="#ffd39b" size="5">Back To Home</font></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
        
        
        
        
        
        
        




    

    







<div id="preloader" style="display: none;">

	<div class="pulse" style="display: none;"></div>

</div><!-- Pulse Preloader -->



<section class="tour-section">

		<div class="full-container" style="background-size:100% 100%;transform: scale(1); opacity: 0;background-image: url('http://www.iiitdmj.ac.in/img/jagriti/cover.jpg');">

			<h1 id="intro_txt" class="animated fadeInDown"><span></span></h1>

		</div>

	</section> <!-- End  tour-section-->



	<section class="tour-section">

		<div class="full-container" style="transform: scale(1); opacity: 0;">

			<div class="half-container" style="transform: translateX(-613px); box-shadow: rgba(0, 0, 0, 0) 0px 0px 40px;background-image: url('http://www.iiitdmj.ac.in/img/jagriti/1.JPG');"></div>



			<div class="half-container" style="transform: translateX(613px); box-shadow: rgba(0, 0, 0, 0) 0px 0px 40px;">

				<div class="txt_container">

                	<h3>Jagriti is Happy hours of our life.</h3>

					<p>...and the little lives with us. Jagriti provides free education to the underpriviledge children of nearby villages. We provide clothing and other basic amenities to improve their lifestyle. We are giving shape to the future of these small children.</p><!-- 

                    <ul class="intro_icons">

                    <li><i class="pe-7s-target"></i>Focus on target</li>

                    <li><i class="pe-7s-science"></i>Advanced learning</li>

                    <li><i class="pe-7s-graph1"></i>Focus on succes</li>

                    </ul> -->

				</div>

			</div>

		</div>

	</section> <!-- End  tour-section-->



	<section class="tour-section">

		<div class="full-container" style="transform: scale(1); opacity: 0;">

			<div class="half-container" style="transform: translateX(613px); box-shadow: rgba(0, 0, 0, 0) 0px 0px 40px;background-image: url('http://www.iiitdmj.ac.in/img/jagriti/4.JPG');"></div>



			<div class="half-container" style="transform: translateX(-613px); box-shadow: rgba(0, 0, 0, 0) 0px 0px 40px;">

			<div class="txt_container">

                	

					<p>We here at Jagrati not only educate the children but also cultivate cultural values to them and improve their personality.</p>

					<p>At Jagriti we help these little kids to find their talents and shape their future life.</p>

					<br/>

					<p><strong><i>"Education does not produce money, education produces wisdom, money is the side product"</i></strong></p>

                    <!-- <ul class="intro_icons">

                    <li><i class="pe-7s-display2"></i>Interactive</li>

                    <li><i class="pe-7s-signal"></i>Wifi area</li>

                    <li><i class="pe-7s-monitor"></i>Computers</li>

                    </ul> -->

				</div>

			</div>

		</div>

	</section> <!-- End  tour-section-->



	<section class="tour-section">

		<div class="full-container" style="transform: scale(1); opacity: 0;">

			<div class="half-container" style="transform: translateX(-613px); box-shadow: rgba(0, 0, 0, 0) 0px 0px 40px;background-image: url('http://www.iiitdmj.ac.in/img/jagriti/2.jpg');"></div>



			<div class="half-container" style="transform: translateX(613px); box-shadow: rgba(0, 0, 0, 0) 0px 0px 40px;">

				<div class="txt_container">

                	<h3></h3>

					<p>We regularly visit the villages around us and come to know the various problems faced byu the people. Today we have more than 300 students and 80 members working for the deelopment of the social &amp; mental status of nearby society. We here at Jagriti, not only educate the children but also cultivate cultural values to them and to improve their personality.</p>

                    <!-- <ul class="intro_icons">

                    <li><i class="pe-7s-medal"></i>Honored staff</li>

                    <li><i class="pe-7s-rocket"></i>Faster learning</li>

                    <li><i class="pe-7s-study"></i>Certifications</li>

                    </ul> -->

				</div>

			</div>

		</div>

	</section><!-- End  tour-section-->

    

    <section class="tour-section">

		<div class="full-container" style="transform: scale(1); opacity: 0;">

			<div class="half-container" style="transform: translateX(613px); box-shadow: rgba(0, 0, 0, 0) 0px 0px 40px;background-image: url('http://www.iiitdmj.ac.in/img/jagriti/3.JPG');"></div>



			<div class="half-container" style="transform: translateX(-613px); box-shadow: rgba(0, 0, 0, 0) 0px 0px 40px;">

				<div class="txt_container">

                	<h3></h3>

					<p><i>Today, Jagriti has reached heights and gained a lots of popularity. But the real success that it has achieved is the love and support of people.</i></p>

                    <ul class="intro_icons">

                    <li><i class="pe-7s-ball"></i>Sports</li>

                    <li><i class="pe-7s-smile"></i>Funny activities</li>

                    </ul>

				</div>

			</div>

		</div>

	</section> <!-- End  tour-section-->

    

     <section class="tour-section">

		<div class="full-container" style="transform: scale(1); opacity: 0;">

			<div class="half-container" style="transform: translateX(-613px); box-shadow: rgba(0, 0, 0, 0) 0px 0px 40px;background-image: url('http://www.iiitdmj.ac.in/img/jagriti/5.JPG');"></div>



			<div class="half-container" style="transform: translateX(613px); box-shadow: rgba(0, 0, 0, 0) 0px 0px 40px;">

				<div class="txt_container">

                	<h3>What We Get ... ???</h3>

					<p>May be this question troubling you the most.<br/> What we get by doing all this ?<br/>The answer is very simple...<br/>We get a hope for the bright future of our country which we wish to see...!!!</p>

<!--                     <ul class="intro_icons">

                    <li><i class="pe-7s-culture"></i>Conference hall</li>

                    <li><i class="pe-7s-bookmarks"></i>Library</li>

                    <li><i class="pe-7s-coffee"></i>Bar and restaurant</li>

                    </ul> -->

				</div>

			</div>

		</div>

	</section> <!-- End  tour-section-->

    

    <section class="tour-section is-visible">

		<div class="full-container" style="transform: scale(1); opacity: 1;">

			<div class="half-container" style="transform: translateX(0px); box-shadow: rgba(0, 0, 0, 0) 0px 0px 40px;background-image: url('http://www.iiitdmj.ac.in/img/tour/5.png');background-size: 300px 360px;"></div>



			<div class="half-container" style="transform: translateX(0px); box-shadow: rgba(0, 0, 0, 0) 0px 0px 40px;">

				<div class="txt_container">

                	<h3>We feel proud to be JAGRATIAN</h3>

					<p>We are serving our nation at a superior level as darkness of each kind can be removed by the light of education.</p>

					<p>Our team is trying to explore the idea of Jagriti and many students studying in different institutes have aquired the idea of doing great deeds.</p>

                	<!-- <a href="#" class="button">Contact us</a> -->

				</div>

			</div>

		</div>

	</section> <!-- End  tour-section-->



	<nav>

		<ul class="vertical-nav">

			<li><a href="#" class="prev">Next</a></li>

			<li><a href="#" class="next inactive">Prev</a></li>

		</ul>

	</nav> <!-- End vertical-nav-->

    

    <nav>

		<ul class="top-nav">

			<li><a href="http://www.iiitdmj.ac.in" class="back"><i class="arrow_back"></i></a></li>

		</ul>

	</nav> <!-- End top-nav-->



<!-- Common scripts -->

<script src="http://www.iiitdmj.ac.in/js/jquery-1.11.2.min.js"></script>

<script src="http://www.iiitdmj.ac.in/site_launch/js/functions.js"></script>



<!-- Specific scripts -->

<script src="http://www.iiitdmj.ac.in/js/tour.min.js"></script>








        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
  
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