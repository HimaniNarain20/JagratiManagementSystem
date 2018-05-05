<?php
//Start the session to see if the user is authenticated user. 
echo '<link rel="stylesheet" href="css/style1.css">  ';
session_start(); 
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
require('menu.php'); 
echo '<div class="back"><ul><li><a href="volunteer_front_page.php">Back To Volunteer Main Page</a></li></ul></div>';

//code to be executed when 'View Students By Their Village' is clicked
  if ($_POST['submit'] == 'View Students By Their Village')
    {
    echo'<div class="form1"><form name="student_village" method="post" action="student_village.php"> 
<h2> Address of student </h2>
<p class="message">Village of student</p>
<input name="village" type="text" id="village" required/>
<p class="message">Submit</p>
<input type="submit" name="submit" value="View The Students" />
</form>
</div>'; 
  }
    
//code to be executed when 'View Students By Their Subject And Class' is clicked
if ($_POST['submit'] == 'View Students By Their Subject And Class')
    {
  echo'<div class="form1">
  <form name="student_subject_class" method="post" action="student_subject_class.php"> 
<h2>Students with Subject and Class</h2>
<p class="message">Subject </p>
<input name="subject_name" type="text" id="subject_name" placeholder="Enter subject" required/>
<p class="message">Class</p>
<input name="class" type="text" id="class" placeholder="Enter class" required/>
<p class="message">Submit</p>
<input type="submit" name="submit" value="View The Students"/>
</form>
</div>';  
}



 if ($_POST['submit'] == 'Find Student')
    {
    echo'<div class="form1"><form name="student_find" method="post" action="student_find.php"> 
<h2> Name of Student </h2>
<p class="message">Name of student</p>
<input name="find" type="text" id="find" required/>
<p class="message">Submit</p>
<input type="submit" name="submit" value="Find The Student" />
</form>
<h2 align="center" >OR</h1>
<form name="student_find" method="post" action="student_find1.php"> 
<h2> ID of Student </h2>
<p class="message">id of student</p>
<input name="find" type="text" id="find" required/>
<p class="message">Submit</p>
<input type="submit" name="submit" value="Find The Student" />
</form>
</div>'; 
  }

  if($_POST['submit']=='Add Student') 
   {
    echo'<div class="form1"><form name="add_student" method="post" action="add_student.php"> 
<h2> Name of Student </h2>
<p class="message">Id of student</p>
<input name="id" type="text" id="id" required placeholder="enter id"/>
<p class="message">Name of student</p>
<input name="name" type="text" id="name" required placeholder="enter name"/>
<p class="message">Name of father</p>
<input name="fname" type="text" id="fname" />
<p class="message">Group Number</p>
<input name="grp" type="text" id="grp" placeholder=""/>
<p class="message">Date of Birth</p>
<input name="DOB" type="text" id="DOB" placeholder=""/>
<p class="message">sex</p>
<input name="sex" type="text" id="sex F or M" placeholder=""/>
<p class="message">Village</p>
<input name="village" type="text" id="village" placeholder=""/>
<p class="message">Address</p>
<input name="addr" type="text" id="addr" placeholder=""/>
<p class="message">Class</p>
<input name="class" type="text" id="class" placeholder=""/>
<p class="message">Subject</p>
<input name="subject" type="text" id="subject" placeholder=""/>
<p class="message">Submit</p>
<input type="submit" name="submit" value="Add Student" />
</form></div>';
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