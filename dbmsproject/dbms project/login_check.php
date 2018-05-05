<?php 
//define login_id and password of the database here so that it can be changed easily 
$dbid = 'garima';
$dbpass ='GARIMAYOI'; 
$database = 'jagrati';
//check if user has pressed submit button 
//value of submit button is login
if ($_POST['submit']=='Login')
{
    // store username and password in variables 
    //method of getting data - text input - post method
    $username = $_POST['username'] ;
    $password = $_POST['password'] ;
    // check if both username and password have been entered 
    if($username && $password )
    {
        $link = @mysql_connect('192.168.1.71', $dbid ,$dbpass); 
        
        //check if link is established 
        if(!$link) 
        { 
            //if link not established the program should die
            die('Failed to connect to server: ' . mysql_error()); 
        } 
        //select database
        $db = mysql_select_db ($database) ;
        //check if the database has been selected 
        if (!$db)
        {
            //if not connected to database program should die
            die('Falied to connect to database:  '.mysql_error());
        }
        // //check login details 
        // $query = "SELECT * FROM volunteer WHERE roll_number = '$username'" ;
        // //check if the given username exists 
        // $check_user = mysql_query($query);
        // //if username doesn't exist

        

        // if(!$check_user)
        // {
        //     //redirect to login page (new) with a message that says username or password is incorrect  
            
        //     header('location:login_form_new.php');
        // }
        
        // //check username and password from table
        // else if($check_user)
        // {
        $query2 = "SELECT * FROM login WHERE roll_number = '$username'  AND password = '$password'" ;
        //only stored boolean values
        $check_user2 = mysql_query($query2);
        $row2=mysql_fetch_array($check_user2);
        if($row2['roll_number'] && $row2['password'])
        //check if username and password match 
        {
              session_start(); 
$_SESSION['IS_AUTHENTICATED'] = 1; 
$_SESSION['USER_ID'] = $username;
            header('location:volunteer_front_page.php'); 
        }
        else
        {
           
   //if they dont match redirect to login page (new) that says username or password is incorrect 
             header('location:login_form_new.php');
          
         }
     

}
}
    
    else if($_POST['submit']=='Forgot Password???')
    {
     
    
        echo '<html>
        <head>  <link rel="stylesheet" href="css/style1.css">  
</head><body>
        <div class="form1">
        <h1 style="color: black">Enter Username , Name, Contact number to reset password</h1>
        <form name="iforgotmypassword" method="post" action="forgot_login_form.php"> 
<p class="message">Username</p>
<input name="username" type="text" id="username" placeholder="enter username" required/>
<p class="message">Name</p>
<input name="name" type="text" id="name" placeholder="enter name" required/> 
<p class="message">Contact Number </p>
<input name="contact_number" type="text" id="contact_number" placeholder="enter contact number" required/>
<p class="message">Password
<input name="new_password" type="password" id="new_password" placeholder="enter password" required/>
<input type="submit" name="submit" value="Reset Password" />
        </form>
        </html>';
    }
    

?>