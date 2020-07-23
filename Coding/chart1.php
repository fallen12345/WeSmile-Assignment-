<?php
include('connect.php');


$mon="SELECT count(id) as 'mon' from registration where (signuptime >='2020-07-13' and signuptime <='2020-07-14' or signuptime >='2020-07-20' and signuptime <= '2020-07-21')";
$resultmon=mysqli_query($db,$mon);
$datamon=mysqli_fetch_array($resultmon);

$tue="SELECT count(id) as 'tue' from registration where (signuptime >='2020-07-14' and signuptime <='2020-07-15'or signuptime >='2020-07-21' and signuptime <= '2020-07-22')";
$resulttue=mysqli_query($db,$tue);
$datatue=mysqli_fetch_array($resulttue);

$wed="SELECT count(id) as 'wed' from registration where (signuptime >='2020-07-15' and signuptime <='2020-07-16' or signuptime >= '2020-07-22' and signuptime <= '2020-07-23')";
$resultwed=mysqli_query($db,$wed);
$datawed=mysqli_fetch_array($resultwed);

$thurs="SELECT count(id) as 'thurs' from registration where (signuptime >='2020-07-16' and signuptime <='2020-07-17'or signuptime >='2020-07-23' and signuptime <= '2020-07-24')";
$resultthurs=mysqli_query($db,$thurs);
$datathurs=mysqli_fetch_array($resultthurs);

$fri="SELECT count(id) as 'fri' from registration where   (signuptime >='2020-07-17' and signuptime <='2020-07-18' or signuptime >='2020-07-24' and signuptime <= '2020-07-25')";
$resultfri=mysqli_query($db,$fri);
$datafri=mysqli_fetch_array($resultfri);

$sat="SELECT count(id) as 'sat' from registration where  (signuptime >='2020-07-18' and signuptime <='2020-07-19'or signuptime >='2020-07-25' and signuptime <= '2020-07-26')";
$resultsat=mysqli_query($db,$sat);
$datasat=mysqli_fetch_array($resultsat);

$sun="SELECT count(id) as 'sun' from registration where  (signuptime >='2020-07-19' and signuptime <='2020-07-20' or signuptime >='2020-07-26' and signuptime <= '2020-07-27')";
$resultsun=mysqli_query($db,$sun);
$datasun=mysqli_fetch_array($resultsun);



$dataPoints = array
( 
   array("y" => $datasun['sun'] ,"label" => "Sunday " ),
  array("y" => $datasat['sat'] ,"label" => "Saturday  " ),
  array("y" => $datafri['fri'] ,"label" => "Friday " ),
  array("y" => $datathurs['thurs'] ,"label" => "Thursday " ),
  array("y" => $datawed['wed'] ,"label" => "Wednesday " ),
  array("y" => $datatue['tue'] ,"label" => "Tuesday " ),
  array("y" => $datamon['mon'] ,"label" => "Monday " ),

 
  

);
  ?>

<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device=width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible"content="ie=edge">
  <title>Registered User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="main.php">Back</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="main.php">Back <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
      <a class="nav-link" href="story.php">Stories</a>
      </li>

        <li class="nav-item">
      <a class="nav-link" href="feedback.php">Share Feedback</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
    </ul>
   
    </span>
  </div>
</nav>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script>


window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  title:{
    text: "User Registered"
  },
  axisY: {
    title: "User",
  },
  data: [{
    type: "bar",
    yValueFormatString: "#,##0 users",
    indexLabel: "{y}",
    indexLabelPlacement: "inside",
    indexLabelFontWeight: "bolder",
    indexLabelFontColor: "white",
    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
  }]
});
chart.render();
 
}

</script>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
</body>

</head>
</html>