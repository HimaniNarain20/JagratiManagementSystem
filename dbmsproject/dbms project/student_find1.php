
 <?php 
 echo '<html><head>';
//Start the session to see if the user is authenticated user. 
 echo '<link rel="stylesheet" href="css/style1.css"> </head><body> ';
session_start(); 
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
// Code to be executed when 'View The Students' is clicked. 
if ($_POST['submit'] == 'Find The Student') 
{ 
if($_POST['find']) 
{ 
require('menu.php'); 
//Connect to mysql server 
$link = @mysql_connect('192.168.1.71', 'garima', 'GARIMAYOI'); 
//Check link to the mysql server 
if(!$link){ 
die('Failed to connect to server: ' . mysql_error()); 
} 
//Select database 
echo '<div class="details"><ul><li><a href="volunteer_front_page.php">Back To Volunteer Main Page</a></li>
</ul>';

$db = mysql_select_db('jagrati'); 
if(!$db){ 
die("Unable to select database"); 
} 
//Prepare query 
$find = $_POST['find']; 
$query = "select student.student_id,student.name k,student.fname,student.group_number,student.date_of_birth,student.sex,student.village,student.address,learns.subject_name,learns.class
from student,learns
where student.student_id = learns.student_id
and student.student_id = $find
";
//Execute query 
$result2 = mysql_query($query);
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
 <th> Address </th>
 <th>Subject</th>
 <th>Class</th>
' ;

/*Show the rows in the fetched result set one by one*/ 
while ($row2 = mysql_fetch_assoc($result2))
{ 
echo '<tr> 

<td>'.$row2['student_id'].'</td>
<td>'.$row2['k'].'</td>
<td>'.$row2['fname'].'</td> 
<td>'.$row2['group_number'].'</td>
<td>'.$row2['date_of_birth'].'</td>
<td>'.$row2['sex'].'</td>
<td>'.$row2['village'].'</td>
<td>'.$row2['address'].'</td> 
<td>'.$row2['subject_name'].'</td>
<td>'.$row2['class'].'</td>

</tr>'; 
}

echo '</table>';
echo '</div></div></body>';
}
} 
 
}
 
 

else{ 
header('location:login_form.php'); 
exit(); 
} 
?>
