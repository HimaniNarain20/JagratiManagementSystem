
 
<?php 
//Start the session to see if the user is authenticated user. 
session_start(); 
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
require('menu.php'); 
} 

?> 
<html> 
<head> 
<title>Jagrati - Volunteer Page</title> 
 <link rel="stylesheet" href="css/style1.css">  
</head> 
<body> 
	
	<div class="form">
<h1 align="center"> -  Jagrati insights - </h1> 
<form name="volunteer_main_page" method="post" action="get_details.php"> 
<br>
<br>
<input type="submit" name="submit" value="About Our Volunteers" />
<input type="submit" name="submit" value="About Our Students" />
<input type="submit" name="submit" value="About Our Events" />  
<input type="submit" name="submit" value="About Our Donations" />
<input type="submit" name="submit" value="Our Time-Table" />
</form>
</div>
</body> 
</html>
