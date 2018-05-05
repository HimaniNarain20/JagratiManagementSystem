<?php
//Start the session to see if the user is authenticated user. 
echo '<link rel="stylesheet" href="css/style1.css">  ';
session_start(); 
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
require('menu.php'); 
//code to be executed when 'View The Organisers Of The Event' is clicked
echo '<div class="back"><ul><li><a href="volunteer_front_page.php">Back To Volunteer Main Page</a></li></ul></div>';

  if ($_POST['submit'] == 'View The Organisers Of The Event')
    {
    echo'<div class="form1">
    <form name="organiser_event" method="post" action="organiser_event.php"> 
<h2>Organisers of event</h2>
<p class="message">Name of event</p>
<input name="name" type="text" id="name" placeholder="enter name" required/>
<p class="message">Date of event</p>
<input name="date" type="text" id="date" placeholder="enter date" required/>
<p class="message">Submit</p>
<input type="submit" name="submit" value="View The Organiser" />
</form>
</div>'; 
  }
    
//code to be executed when 'View The Participants Of The Event' is clicked
if ($_POST['submit'] == 'View The Participants Of The Event')
    {
  echo'<div class="form1">
  <form name="participant_event" method="post" action="participant_event.php"> 
<h2>Participants in Event</h2>
<p class="message">Name of event</p>
<input name="name" type="text" id="name" placeholder="enter name" required/>
<p class="message">Date of event</p>
<input name="date" type="text" id="date" placeholder="enter date" required/>
<p class="message">Submit</p>
<input type="submit" name="submit" value="View The Participants" />
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
?>