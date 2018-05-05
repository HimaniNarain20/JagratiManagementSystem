<?php
echo '<html><head>';
echo '<link rel="stylesheet" href="css/style1.css">  </head><body>';
//Start the session to see if the user is authenticated user. 
session_start(); 
$value2="";
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
require('menu.php'); 

//code to be executed when 'View Volunteers By Their Day' is clicked
echo '<div class="back"><ul><li><a href="volunteer_front_page.php">Back To Volunteer Main Page</a></li>

</ul></div>';
  if ($_POST['submit'] == 'View Volunteers By Their Day')
    {
    echo'
    <div class="form1">
    <form name="volunteer_day" method="post" action="volunteer_day.php"> 
<h2 align="center" >Enter the day for volunteers to be searched</h2>
<input name="day" type="text" id="day" placeholder="Enter day here" required />
<input type="submit" name="submit" value="View The Volunteer" />
</div></body>'; 
  }
    
//code to be executed when 'View Volunteers By Their Subject And Class' is clicked
if ($_POST['submit'] == 'View Volunteers By Their Subject And Class')
    {
  echo'
  <div class="form1">
  <form name="volunteer_subject_class" method="post" action="volunteer_subject_class.php">  
  <h2>Subject and class taught by volunteer</h2>
  <p class="message">Subject taught by Volunteer</p>
  <input name="subject_name" type="text" id="subject_name" placeholder="Enter subject" required/>
  <p class="message">Class taught by volunteer</p>
  <input name="class" type="text" id="class" placeholder="Enter class" required/>
  <p class="message">Submit</p>
  <input type="submit" name="submit" value="View The Volunteer"/>
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