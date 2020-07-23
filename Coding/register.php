<?php include 'server.php';?>
<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="style5.css">  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- jQuery file  -->
	<script src="js/jquery-1.11.3.min.js"></script>
	<!-- Custom JS file -->
	<script src="js/script.js"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <title>Registration </title>
  <link rel="stylesheet" type="text/css" href="style.css">
  
</head>


  
<body>

  <div class="header">
  	<h2>Register To WeSmile</h2>
  </div>
  
  
	
  <form method="POST" action="register.php">
 
  	<?php include('error.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" id="username" class="input-control" />
           <div id="status"></div>
  	
  	
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
       
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>

