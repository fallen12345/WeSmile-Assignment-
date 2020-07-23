<?php
session_start();

$username = "";
$email    = "";
$errors = array(); 


$db = mysqli_connect('fdb20.awardspace.net', '3052600_calvin', 'calvin12', '3052600_calvin');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords does not match");
  }

  $user_check_query = "SELECT * FROM registration WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO registration (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
        $peanut='login.php';
        echo '<script type="application/javascript">alert("Register sucessful"); window.location.href = "'.$peanut.'";</script>';
  	
       
  }
}
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM registration WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
          $peanut='main.php';
        echo '<script type="application/javascript">alert("Login sucessful"); window.location.href = "'.$peanut.'";</script>';
  	  header('location: main.php');
  	}else {
       
  		array_push($errors, "<font color=\"red\">Wrong username/password combination</font>");
  	}
  }
}



if(isset($_POST['submit'])){
    $nick=$_POST['nick'];
    $feedback=$_POST['feedback'];
    $date=$_POST['date'];
    
    
    $sql_u="SELECT * FROM feedback WHERE nick='$nick'";
    $res_u=mysqli_query($db,$sql_u)or die(mysqli_error($db));
   
    if(mysqli_num_rows($res_u)>0){
        header("location:feedback.php?wrong");
    }else{
         $sql="INSERT INTO feedback (nick,feedback,date)values('$nick','$feedback','$date')";
         if($db->query($sql)){
          header("location:feedback.php?success");
        }
        
    }
    
}
?>

