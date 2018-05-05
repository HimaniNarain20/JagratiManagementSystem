<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Jagrati Volunteer Login</title>
      <link rel="stylesheet" href="css/style1.css">  
</head>

<body>
     <ul>
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="activities.php">Activities</a></li>
						<li><a href="contact.php">Contact</a></li>
                        <li class="has-dropdown"><a href="">Volunteer's Page</a>
                        </li>
					</ul>
  <div class="login-page">
     
  <div class="form">
    <form class="register-form" action="sign_up_insert.php" method="post">
      <h3 align="center">Register</h3>
     <input type="text" placeholder="Enter Roll Number" name="roll_number" id="roll_number" required/>
      <input type="text" placeholder="Name" name="name" id="name"/>
      <input type="text" placeholder="Contact Number" name="contact_number" id="contact_number"/>
      <input type="text" placeholder="Enter Graduation" name="graduation" id="graduation">
      <input type="text" placeholder="Enter Branch" name="branch" id="branch">
      <input type="password" placeholder="password" name="password" id="password" required/>
      <input type="password" placeholder="Retype Password" name="retype_password" id="retype_password" required/>
      <input type="submit" name="submit" value="Sign Up">

      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>




    <form class="login-form" action="login_check.php" method="post">
      <h3 align="center">Login</h3>
       <input type="text" placeholder="name" name="username" id="username" required/>
      <input type="password" placeholder="password" name="password" id="password" required/>
      <input type="submit" name="submit" value="Login">
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
    <form action="login_check.php" method="post">
      <p class="message">Forgot Password</p>
      <input type="submit" name="submit" value="Forgot Password???">
    </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="js/index1.js"></script>

</body>
</html>
