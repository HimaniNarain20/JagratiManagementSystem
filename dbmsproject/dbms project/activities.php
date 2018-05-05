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
        @import url('https://fonts.googleapis.com/css?family=Pacifico');
        @import url('https://fonts.googleapis.com/css?family=Macondo+Swash+Caps');
        @import url('https://fonts.googleapis.com/css?family=Libre+Baskerville');
        @import url('https://fonts.googleapis.com/css?family=Maven+Pro');
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
        h2.ourteam
        {
          font-family: 'Macondo Swash Caps', cursive; 
        }
        font.activity
        {
            font-family: 'Libre Baskerville', serif;
        }
      font.inner_activity
        {
           font-family: 'Maven Pro', sans-serif; 
        }
    </style>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Jagriti &mdash; A IIIT Initiative </title>
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
						<li><a href="about.php">About</a></li>
						<li class="active"><a href="activities.php">Activities</a></li>
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
						</div>
					</div>
				</div>
                <table>
                <tbody>
                    <tr> <td><img src="ourteam.jpg" width="500" height="290"></td>
                        <td><center><h2 class="ourteam"><i><font size="6" color="#fffaf0">Perhaps the greatest social service that can be rendered by anybody to the country and to mankind is to bring up a family.<br><b><font align="right" color="#000000">-Jagrati</font></b></font></i></h2></center></td><br><br>
             </tr>
                </tbody>
            </table>
			</div>

		</div><br><br>

                
	</header>
         
                <table cellspacing="2">
                    <tbody>
                        <tr>
                            <th><font class="activity" align="center" size="5" color="#00008b"><b>TEACHING</b></font></th>
                            <th>&nbsp</th>
                        </tr>
                        <tr>
                            <td><font class="inner_activity" align="left" size="4" color="#000000"><i>Evening time is arranged for these children to teach the academics, morals, manners and discipline by the volunteers who are from the Colleges/Organisation/Company. Teaching activity is well planned in a way strengthening children varying from Nursery to 12th standard, academically good and enabling them to compete with students studying in their schools to equate their ability from slumdog to professional�s Child.</i></font></td>
                            <td><img align="right" src="teaching.JPG" width="800" height="300"></td>
                        </tr>
                        <tr>
                            <th>&nbsp</th>
                            <th><font class="activity" align="center" size="5" color="#00008b"><b>CLOTHES DONATION</b></font></th>
                        </tr>
                        <tr>
                            <td><font  align="left"><img src="clothdonation.jpg" width="700" height="300"></font></td>
                            <td><font class="inner_activity" align="right" size="4" color="#000000"><i>Today, more than ever, you can help your neighbors and communities in need by donating clothes and other gently used household items to local charities. Your clothing donations make a big difference to individuals who are struggling to make ends meet. Clothing donations can provide an individual with the clothes � and the confidence � he needs to succeed in his next job interview. Donating clothing can enable a child to prosper at school among her peers.</i></font></td>
                        </tr>
                        <tr>
                            <th><font class="activity" align="center" size="5" color="#00008b"><b>PLANTATION</b></font></th>
                            <th>&nbsp</th>
                        </tr>
                         <tr>
                             <td><font class="inner_activity" align="left" size="4" color="#000000"><i>Trees are important, necessary and valuable to our very existence. It's not too hard to believe that without trees we humans would not exist on this beautiful planet. Unfortunately, our need for trees is more than ever. While science and technology has provided us with many comforts, the consequent urbanization and industrialization also has had some undesired side-effects; Global Warming being one of those. The club has identified this problem and has associated itself with this case. Thereby, the Jagrati conducts a plantation drive each year.</i></font></td>
                            <td><img align="right" src="plantation.jpeg" width="800" height="300"></td>
                        </tr>
                        <tr>
                            <th>&nbsp</th>
                            <th><font class="activity" align="center" size="5" color="#00008b"><b>MEDICAL CAMP</b></font></th>
                        </tr>
                        <tr>
                            <td><img align="left" src="medicalcamp.png" width="700" height="300"></td>
                            <td><font class="inner_activity" align="right" size="4" color="#000000"><i>Health is wealth If students are healthy they can concentrate on their studies better and give good results. For this we guide their parents to take their children to doctors and take proper medicine. Health camps are also organized By usand general medicines are distributed free of cost to everyone.</i></font></td>
                        </tr>
                        
  
                        <tbody>
                </table>
        
<!--
       <br><br> <table>
            <tbody>
                 <tr>
                        <th class="activity">TEACHING</th>
                            <th>&nbsp</th>
                        </tr>
                        <tr>
                            <td><i>Evening time is arranged for these children to teach the academics, morals, manners and discipline by the volunteers who are from the Colleges/Organisation/Company. Teaching activity is well planned in a way strengthening children varying from Nursery to 12th standard, academically good and enabling them to compete with students studying in their schools to equate their ability from slumdog to professional�s Child.</i></td>
                            <td><img src="teaching.JPG" width"2000" height="300"></td>
                        </tr>
            </tbody>
        </table><br><br>
        <table>
            <tbody>
                <tr>
                            <th>&nbsp</th>
                            <th class="activity">CLOTHES DONATION</th>
                        </tr>
                        <tr>
                            <td><img src="clothdonation.jpg" width="700" height="300"></td>
                            <td><i>Today, more than ever, you can help your neighbors and communities in need by donating clothes and other gently used household items to local charities. Your clothing donations make a big difference to individuals who are struggling to make ends meet. Clothing donations can provide an individual with the clothes � and the confidence � he needs to succeed in his next job interview. Donating clothing can enable a child to prosper at school among her peers.</i></td>
                        </tr>
            </tbody>
        </table><br><br>
        <table>
            <tbody>
                <tr>
                             <th class="activity">PLANTATION</th>
                            <th>&nbsp</th>
                        </tr>
                         <tr>
                            <td><i>Trees are important, necessary and valuable to our very existence. It's not too hard to believe that without trees we humans would not exist on this beautiful planet. Unfortunately, our need for trees is more than ever. While science and technology has provided us with many comforts, the consequent urbanization and industrialization also has had some undesired side-effects; Global Warming being one of those. The club has identified this problem and has associated itself with this case. Thereby, the Jagrati conducts a plantation drive each year.</i></td>
                            <td><img align="right" src="plantation.jpeg" width"1000" height="300"></td>
                        </tr>
            </tbody>
        </table><br><br>
        <table>
            <tbody>
                <tr>
                            <th>&nbsp</th>
                            <th class="activity">MEDICAL CAMP</th>
                        </tr>
                        <tr>
                            <td><img src="medicalcamp.png" width="700" height="300"></td>
                            <td><i>Health is wealth If students are healthy they can concentrate on their studies better and give good results. For this we guide their parents to take their children to doctors and take proper medicine. Health camps are also organized By usand general medicines are distributed free of cost to everyone.</i></td>
                        </tr>
            </tbody>
        </table>
-->
        
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