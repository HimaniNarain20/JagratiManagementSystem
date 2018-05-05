<?php
echo '<html>';
echo '<head>';
echo'<link rel="stylesheet" href="css/style1.css">  ';
echo '</head>';
echo '<body>';
//Start the session to see if the user is authenticated user. 
session_start(); 

//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)
{
require('menu.php'); 
// Code to be executed when 'About Our Volunteers' is clicked. 
if ($_POST['submit'] == 'About Our Volunteers')
{
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
 echo '<div class="details">

   <form name="volunteer_special_details" method="post" action="volunteer_special_details.php"> 
<ul> 
<li> 
<input type="submit" name="submit" value="View Volunteers By Their Day" /></li> 

<li><input type="submit" name="submit" value="View Volunteers By Their Subject And Class" /></li> 

<li><input type="submit" name="submit" value="Back To Volunteer Main Page" /></li> 

       </ul>
       </form>
';
/*Create query*/ 
$qry1 = 'SELECT * FROM volunteer'; 

/*Execute query*/ 
$result1 = mysql_query($qry1);
echo '<div class="display-d">';
echo '<h2>The Volunteer Details are - </h2>';

 /*Draw the table for Players*/ 
echo '<table class="table-t" > 

<th> Roll Number </th> 
<th> Name </th>
 <th> Contact Number </th> 
  <th> Graduation</th>
    <th> Branch </th>' ;

/*Show the rows in the fetched result set one by one*/ 
while ($row1 = mysql_fetch_assoc($result1))
{ 
echo '<tr> 

<td>'.$row1['roll_number'].'</td>
<td>'.$row1['name'].'</td>
<td>'.$row1['contact_number'].'</td> 
<td>'.$row1['graduation'].'</td>
<td>'.$row1['branch'].'</td>
</tr>'; 
}

echo '</table>';
echo '</div></div>';


} 
}
    
    
    
    
    
    
    
    

    // Code to be executed when 'About Our Students' is clicked.
    if ($_POST['submit'] == 'About Our Students')
{
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
 echo '<div class="details">
   <form name="student_special_details" method="post" action="student_special_details.php"> 
<ul>
<li><input type="submit" name="submit" value="View Students By Their Village" /></li>  
<li><input type="submit" name="submit" value="View Students By Their Subject And Class" /></li> 
<li><input type="submit" name="submit" value="Back To Volunteer Main Page" /></li> 
<li><input type="submit" name="submit" value="Find Student"/></li>
<li><input type="submit" name="submit" value="Add Student"/><li>
 </ul>
 </form>  
';
/*Create query*/ 
$qry2 = 'SELECT * FROM student'; 

/*Execute query*/ 
$result2 = mysql_query($qry2);
echo '<div class="display-d">';
echo '<h2>The Student Details are - </h2>';

 /*Draw the table for Players*/ 
echo '<table class="table-t"> 

<th> Student ID </th> 
<th> Name </th>
 <th> Father Name </th> 
  <th> Group Number</th>
    <th> Date Of Birth </th>
    <th>Sex </th> 
<th> Village </th>
 <th> Address </th>' ;

/*Show the rows in the fetched result set one by one*/ 
while ($row2 = mysql_fetch_assoc($result2))
{ 
echo '<tr> 

<td>'.$row2['student_id'].'</td>
<td>'.$row2['name'].'</td>
<td>'.$row2['fname'].'</td> 
<td>'.$row2['group_number'].'</td>
<td>'.$row2['date_of_birth'].'</td>
<td>'.$row2['sex'].'</td>
<td>'.$row2['village'].'</td>
<td>'.$row2['address'].'</td> 
</tr>'; 
}

echo '</table>';
echo '</div></div>';


} 
    
}
    
    
    
    
    
 
    
    
    
    
    
    
   // Code to be executed when 'About Our Events' is clicked.  
     if ($_POST['submit'] == 'About Our Events')
{
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
echo '<div class="details">
   <form name="event_special_details" method="post" action="event_special_details.php"> 
   <ul>
<li><input type="submit" name="submit" value="View The Organisers Of The Event" /></li> 
<li><input type="submit" name="submit" value="View The Participants Of The Event" /></li> 
<li><input type="submit" name="submit" value="Back To Volunteer Main Page" /></li> 
       </ul>
</form>';
 
/*Create query*/ 
$qry3 = 'SELECT * FROM event'; 

/*Execute query*/ 
$result3 = mysql_query($qry3);
echo '<div class="display-d">';
echo '<h2>The Event Details are - </h2>';

 /*Draw the table for Players*/ 
echo '<table class="table-t"> 

<th>Event Name </th> 
<th>Start Date </th>' ;

/*Show the rows in the fetched result set one by one*/ 
while ($row3 = mysql_fetch_assoc($result3))
{ 
echo '<tr> 

<td>'.$row3['name'].'</td>
<td>'.$row3['date'].'</td>
</tr>'; 
}

echo '</table>';
echo '</div></div>';


} 
}

    
    
    
    
    
    
        // Code to be executed when 'About Our Donations' is clicked.
    if ($_POST['submit'] == 'About Our Donations')
{
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

 echo '<div class="details">
   <form name="donation_special_details" method="post" action="donation_special_details.php"> 
   <ul>
<li><input type="submit" name="submit" value="View The Organisers Of The Donation" /></li>  
<li><input type="submit" name="submit" value="Back To Volunteer Main Page" /></li> 
</ul>
</form>
';
/*Create query*/ 
$qry4 = 'SELECT * FROM donation'; 

/*Execute query*/ 
$result4 = mysql_query($qry4);
echo '<div class="details-d">';
echo '<h2>The Donation Details are - </h2>';

 /*Draw the table for Players*/ 
echo '<table class="table-t"> 

<th>The Cause Of The Donation </th> 
<th>Start Date </th>
    <th>End Date </th> 
<th>Amount Collected </th>';

/*Show the rows in the fetched result set one by one*/ 
while ($row4 = mysql_fetch_assoc($result4))
{ 
echo '<tr> 

<td>'.$row4['cause'].'</td>
<td>'.$row4['start_date'].'</td>
<td>'.$row4['end_date'].'</td>
<td>'.$row4['amount'].'</td>
</tr>'; 
}

echo '</table>';
echo '</div></div>';

}
    }
    
    
    
    
    
 // Code to be executed when 'Our Time-Table' is clicked.
    if ($_POST['submit'] == 'Our Time-Table')
{
  include('tt.html');
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
 echo '<div class="details">
 <form name="time-table_special_details" method="post" action="time-table_special_details.php"> 
<input type="submit" name="submit" value="Back To Volunteer Main Page" />
</form>
</div>';
    }
    }

    
    

    
    
    
}
   else
{ 
    echo 'Your session is over!!!Please Login Again!!!';
header('location:login_form.php'); 
exit(); 
} 
echo '</body>';
echo '</html>';
?>
