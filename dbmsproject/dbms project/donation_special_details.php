<?php
//Start the session to see if the user is authenticated user.
echo '<html><head>';
echo '<link rel="stylesheet" href="css/style1.css">  '; 
echo '</head><body>';
session_start(); 
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
require('menu.php'); 
//code to be executed when 'View The Organisers Of The Donation' is clicked
echo '<div class="back"><ul><li><a href="volunteer_front_page.php">Back To Volunteer Main Page</a></li></ul></div>';

  if ($_POST['submit'] == 'View The Organisers Of The Donation')
    {
    echo'<div class="form1">
    <form name="organiser_donation" method="post" action="organiser_donation.php">  
    <h2>Organiser of Donation</h2>
    <p class="message">Cause of Donation</p>
    <input name="cause" type="text" id="cause" placeholder="Enter cause" required/>
    <p class="message">Start Date</p>
    <input name="start_date" type="text" id="start_date" placeholder="Enter start date" required/> 
    <p class="message">Submit</p>
    <input type="submit" name="submit" value="View The Organiser" />
    </form>
    </div>'; 
  }
    



//code to be executed when 'Back To Volunteer Main Page' is clicked
    if ($_POST['submit'] == 'Back To Volunteer Main Page')
    {
        header('location:volunteer_front_page.php');
    }
}
   else
{ 
    echo 'Your session is over!!!Please Login Again!!!';
header('location:login_form.php'); 
exit(); 
}
echo '</body></html>';
?>