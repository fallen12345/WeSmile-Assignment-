<?php
session_start();
{
if(!isset($_SESSION["username"]))
 

header("location:login.php?action=login");
}
include("interface.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
 
  <title>WeSmile</title>
  <script language="javascript"> type="text/javascript"
          window.history.forward();
      </script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 22px Montserrat, sans-serif;
    line-height: 1;
    color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
    background-color: #1abc9c; /* Green */
    color: #ffffff;
  }
  .bg-2 { 
    background-color: #474e5d; /* Dark Blue */
    color: #ffffff;
  }
  .bg-3 { 
    background-color: #ffffff; /* White */
    color: #555555;
  }
  .bg-4 { 
    background-color: #2f2f2f; /* Black Gray */
    color: #fff;
  }
  .container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
  }
  .navbar {
    padding-top: 15px;
    padding-bottom: 15px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 16px;
    letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
    color: #1abc9c !important;
  }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">YouSmileWeSmile</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      <li><a href="story.php">Share Your Story</a></li>
      <li><a href="chart.php">Population</a></li>
      <li><a href="chart1.php">Registered Statistic</a></li>
        <li><a href="feedback.php">Share Feedback</a></li>
        <li><a href="displayfb.php"> Feedback</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <h3 class="margin">Hello, Cutie</h3>
  <img src="cute.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
  <h3>WeSmile is a place where you can share your joke or stories to everyone else</h3>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
  <h3 class="margin">Share Your Stories</h3>
  <p>Dont get embarrassed about what story or jokes you had ,whoever share the story will be anonymous to others</p>
  <a href="story.php" class="btn btn-default btn-lg">
    <span class="glyphicon glyphicon-search"></span> Share
  </a>
</div>

<!-- Third Container (Grid) -->
<div class="container-fluid bg-3 text-center">    
  <h3 class="margin">Why Choose Me?</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <p>To keep put smile on you face by reading others interesting stories.</p>
      <img src="smile1.jpg" class="img-responsive margin" style="width:80%" alt="Image">
    </div>
    <div class="col-sm-4"> 
      <p>To share stories with eveyone all around the world.</p>
      <img src="earth1.jpg" class="img-responsive margin" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-4"> 
      <p>To share the secret deep inside you without letting others know who you are.</p>
      <img src="heart.jpg" class="img-responsive margin" style="width:90%" alt="Image">
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p> Made By <a href="mainpage.php">Calvin</a></p> 
</footer>

</body>
</html>
