<?php
session_start(); 
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)
{

}
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
        div.main_heading
        {
            font-size:30px;
/*         font-family: 'Dancing Script', cursive;*/
              font-family: 'Bad Script', cursive;
        }
        a.btn btn-white btn-outline btn-lg btn-block
        {
            font-family: 'Gentium Book Basic', serif; 
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
/*            font-family: 'Dancing Script', cursive;*/
        }
       a.btn btn-white btn-lg btn-outline
        {
            
            font-family: 'Gentium Book Basic', serif;
        }
        h2.volunteer
        {
       
           font-family: 'Gentium Book Basic', serif;
            
        }
        p.volunteer-details
        {
           font-family: 'Prosto One', cursive; 
        }
        h3.choti-headings
        {
            font-family: 'Alegreya Sans SC', sans-serif;
        }
        span.choti-headings
        {
            font-family: 'Alegreya Sans SC', sans-serif;
        }
        p.inner-stuff
        {
            font-family: 'Special Elite', cursive;
        }
    </style>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title class="main_heading">Jagriti &mdash; An Initiative By IIITians </title>
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
                    <div class="main_heading" ><a href="index.php"> <b>Jagrati - An Initiative By IIITians</b><em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
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
        
	<header id="gtco-header" class="gtco-cover" role="banner">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					<div class="display-t">
						<div class="display-tc">
                            <h1 class="animate-box" data-animate-effect="fadeInUp"><p >JAGRATI</p></h1>
                            <h2 class="animate-box" data-animate-effect="fadeInUp"><b>A child without education is like a bird without wings <br>Gives a way of changing lives of needy children</b></h2>
                            <!-- add link to sign up page? -->
                            <p class="animate-box" data-animate-effect="fadeInUp"><a href="login_form.php" class="btn btn-white btn-lg btn-outline"><b><font size="5">Join Us</font></b></a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>



	<div id="gtco-portfolio" class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                    <h2 class="volunteer"> <font size="50">VOL&nbsp NTEER</font></h2>
                   <font size="20"> <p class="volunteer-details">all that's missing is <b>U</b></p>
                    <p class="volunteer-details">You must not lose faith in humanity. Humanity is an ocean; if a few drops of the ocean are dirty, the ocean does not become dirty</p></font>
				</div>
			</div>

			<div class="row row-pb-md">
				<div class="col-md-12">
					<ul id="gtco-portfolio-list">
						<li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/img_1.jpg); "> 
							<a href="#" class="color-1">
								<div class="about-us">
                                    <span><h3 class="choti-headings"><font size="8"><b>AIM</b></font></h3></span>
                                    <p class="inner-stuff"><font size="4">The aim of the Institute is not only to make a better engineer but also to make a good human being. From time to time , sincere guidelines are given by faculty members of the institute. Illiteracy is like a bird without wings. So efforts to eradicate it is really appreciable <br> <b>Prof. Mukesh Kumar Roy</b><br>Faculty Advisor </font> </p>
								</div>
							</a>
						</li>
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/img_2.jpg); ">
							<a href="#" class="color-2">
								<div class="about-us">
                                    <span><h3 class="choti-headings"><font size="8"><b>Mission</b></font></h3></span>
                                    <p class="inner-stuff"><font size="4">Our mission is to erradicate illiteracy from India We are moving toward our mission by implementing this in IIIT Jabalpur by giving quality and value education to student of nearby villages. </font></p>
								</div>
							</a>
						</li>


						<li class="one-half animate-box" data-animate-effect="fadeIn" style="background-image: url(images/img_3.jpg); ">
							<a href="#" class="color-3">
								<div class="about-us">
                                    <span><h3 class="choti-headings"><font size="8"><b>Vision</b></font></h3></span>
                                    <p class="inner-stuff"><font size="4">Our vision is to see india one day having no person illiterate and no poverty .We are trying to make good citizens of India.Technological resources for contributing to the economic and social development of the nation at large and region in particular. </font></p>
								</div>
							</a>
						</li>
						<li class="one-half animate-box" data-animate-effect="fadeIn" style="background-image: url(images/img_4.jpg); ">
							<a href="#" class="color-4">
								<div class="about-us">
                                    <span class="choti-headings"><font size="8">Jagriti is Happy hours of our life.</font></span>
									<p class="inner-stuff"><font size="4">
                                        ...and the little lives with us. Jagriti provides free education to the underpriviledge children of nearby villages. We provide clothing and other basic amenities to improve their lifestyle. We are giving shape to the future of these small children.</font></p>
								</div>
							</a>
						</li>

						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/img_5.jpg); "> 
							<a href="#" class="color-5">
								<div class="about-us">
									<span></span>
									<p class="inner-stuff"><font size="4">We here at Jagrati not only educate the children but also cultivate cultural values to them and improve their personality.
                                        At Jagriti we help these little kids to find their talents and shape their future life.
                                        <b>"Education does not produce money, education produces wisdom, money is the side product"</b></font></p>
								</div>
							</a>
						</li>
						<li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/img_6.jpg); ">
							<a href="#" class="color-6">
								<div class="about-us">
                                    <span><h3 class="choti-headings"><font size="8"><b>What do we get?</b></font></h3></span>
									<p class="inner-stuff"><font size="4">What We Get ... ???
                                        May be this question troubling you the most.
                                        What we get by doing all this ?
                                        The answer is very simple...
                                        We get a hope for the bright future of our country which we wish to see...!!!</font></p>
								</div>
							</a>
						</li>
					</ul>		
				</div>
			</div>

			<div class="row">
				<div class="col-md-4 col-md-offset-4 text-center animate-box">
                    <a href="activities.php" class="btn btn-white btn-outline btn-lg btn-block"><b><font size="5">See All Our Works</font></b></a>
				</div>
			</div>

			
		</div>
	</div>





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

