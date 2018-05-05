
 <?php 
//Start the session to see if the user is authenticated user. 
 echo '<link rel="stylesheet" href="css/style1.css">  ';
session_start(); 
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
// Code to be executed when 'View The Organiser' is clicked. 
if ($_POST['submit'] == 'View The Organiser') 
{ 
if($_POST['cause'] && $_POST['start_date']) 
{ 
require('menu.php'); 
//Connect to mysql server 
$link = @mysql_connect('192.168.1.71', 'garima', 'GARIMAYOI'); 
//Check link to the mysql server 
if(!$link){ 
die('Failed to connect to server: ' . mysql_error()); 
} 
//Select database 
$db = mysql_select_db('jagrati'); 
if(!$db){ 
die("Unable to select database"); 
} 
echo '<div class="details"><ul><li><a href="volunteer_front_page.php">Back To Volunteer Main Page</a></li></ul>';

//Prepare query 
$cause = $_POST['cause']; 
$start_date = $_POST['start_date']; 
$query = "select name,contact_number 
from volunteer,oversees
where oversees.cause='$cause' and
      oversees.start_date='$start_date' and
      oversees.roll_number=volunteer.roll_number";
//Execute query 
$result = mysql_query($query); 
echo '<div class="display-d"><h1>Volunteers who organised the Donation:';
echo $cause;
echo' on Date:';
echo $start_date;
echo ' are:-</h1>'; 
echo '<table class="table-t"> 
<tr><th>Volunteer Name</th> 
<th>Contact Number</th> 
</tr>'; 

while($row = mysql_fetch_array($result)) 
 
{ 
echo "<tr><td>" . $row['name'] . "</td> 
<td>" . $row['contact_number']."</td> 
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
