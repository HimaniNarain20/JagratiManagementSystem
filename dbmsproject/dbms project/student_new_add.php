<?php
session_start();
echo '<html>';
echo '<head>';
echo'<link rel="stylesheet" href="css/style1.css">  ';
echo '</head>';
echo '<body>';
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)
{
require('menu.php'); 
echo '<div class="details"><ul><li><a href="volunteer_front_page.php">Back To Volunteer Main Page</a></li></ul>';

//validation flag to check that all validations are done 
$validationFlag = true;
    //If all validations are correct, connect to MySQL and execute the query
    if($validationFlag)
{ 
//Connect to mysql server 
$link = @mysql_connect('192.168.1.71','garima', 'GARIMAYOI'); 
//Check link to the mysql server 
if(!$link)
{ 
die('Failed to connect to server: ' . mysql_error()); 
} 
//Select database 
$db = mysql_select_db('jagrati'); 
if(!$db){ 
die("Unable to select database"); 
} 

echo'<div class="form1"><form name="student_subject_add" method="post" action="student_add.php"> 
<h2> Add Subject</h2>
<p class="message">Student ID</p>
<input name="id" type="text" id="id" required/>
<p class="message">Name of subject</p>
<input name="subject" type="text" id="subject" required/>
<p class="message">Class</p>
<input name="class" type="text" id="class" required/>
<p class="message">Submit</p>
<input type="submit" name="submit" value="Add Subject and Class" />
</form>
<h2 align="center" >OR</h1>
<form name="student_event_add" method="post" action="student_add.php"> 
<h2> Add Event Participated in</h2>
<p class="message">Student ID</p>
<input name="id" type="text" id="id" required/>
<p class="message">Name of event</p>
<input name="subject" type="text" id="subject" required/>
<p class="message">Date of event</p>
<input name="date" type="text" id="date" required/>
<p class="message">Submit</p>
<input type="submit" name="submit" value="Add Participation" />
</form>
</div>'; 
}
}

?>