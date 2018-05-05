
 <?php 
//Start the session to see if the user is authenticated user. 
 echo '<link rel="stylesheet" href="css/style1.css">  ';
session_start(); 
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
// Code to be executed when 'View The Students' is clicked. 
if ($_POST['submit'] == 'View The Students') 
{ 
if($_POST['village']) 
{ 
require('menu.php'); 
//Connect to mysql server 
$link = @mysql_connect('192.168.1.71', 'garima', 'GARIMAYOI'); 
//Check link to the mysql server 
if(!$link){ 
die('Failed to connect to server: ' . mysql_error()); 
} 
//Select database 
echo '<div class="details"><ul><li><a href="volunteer_front_page.php">Back To Volunteer Main Page</a></li></ul>';

$db = mysql_select_db('jagrati'); 
if(!$db){ 
die("Unable to select database"); 
} 
//Prepare query 
$village = $_POST['village']; 
$query = "select student.student_id,student.name,student.fname,student.address
        from student
        where student.village='$village'";
//Execute query 
$result = mysql_query($query); 
echo '<div class="display-d"><h1>Students from ';
echo $village;
echo ' village are:-</h1>'; 
echo '<table class="table-t"> 
<tr><th>Student ID</th> 
<th>Student Name</th>
<th>Father Name</th> 
<th>Address</th>
</tr>'; 

while($row = mysql_fetch_array($result)) 
 
{ 
echo "<tr><td>" . $row['student_id'] . "</td> 
<td>" . $row['name']."</td> 
<td>" . $row['fname']."</td> 
<td>" . $row['address']."</td> 
</tr>"; 
echo "<br/>"; 
} 
echo "</table></div></div>"; 
} 
 
}
 
 
} 
else{ 
header('location:login_form.php'); 
exit(); 
} 
?>
