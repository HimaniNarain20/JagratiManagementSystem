
 <?php 
 echo '<html><head>';
//Start the session to see if the user is authenticated user. 
 echo '<link rel="stylesheet" href="css/style1.css"> </head><body> ';
session_start(); 
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
// Code to be executed when 'View The Students' is clicked. 
if ($_POST['submit'] == 'Add Subject and Class') 
{ 
if($_POST['id']&&$_POST['subject']&&$_POST['class']) 
{ 
require('menu.php'); 
$id = $_POST['id'];
$subject = $_POST['subject'];
$class = $_POST['class'];
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
$flag=0;
$query="select * from learns where student_id= $id and class IS NOT NULL";
$result = mysql_query($query);
$row1 = mysql_fetch_assoc($result);
if($row1){
//Prepare query 
$queryins ="insert into learns(student_id,subject_name,class) values($id,$subject,$class)";
$result1 = mysql_query($queryins);
$flag=1;
}
else{
	$queryins ="update into learns set values subject_name = '$subject' and class=$class where student_id = $id";
$result1 = mysql_query($queryins);
}
echo '<div class="display-d">';
echo '<h2>The Student Details are - </h2>';

 /*Draw the table for Players*/ 
echo '<table class="table-t"> 

<th> Student ID </th> 
<th> Name of Subject</th>
 <th> Class </th> 
 ';

/*Show the rows in the fetched result set one by one*/ 
if($flag==1)
{
	while ($row2 = mysql_fetch_assoc($result1))
	{ 
echo '<tr> 

<td>'.$row2['student_id'].'</td>
<td>'.$row2['subject_name'].'</td>
<td>'.$row2['class'].'</td> 

</tr>'; 
}
}
else{
while ($row2 = mysql_fetch_assoc($result1))
{ 
echo '<tr> 

<td>'.$row2['student_id'].'</td>
<td>'.$row2['subject_name'].'</td>
<td>'.$row2['class'].'</td> 

</tr>'; 
}
echo '</table>';
echo '</div></div></body>';
}}
} 
 
}
 
 

else{ 
header('location:login_form.php'); 
exit(); 
} 
?>
