<?php

//fetch.php

include('connect.php');

if(isset($_POST["year"]))
{
 $query = "
 SELECT * FROM graph 
 WHERE year = '".$_POST["year"]."' 
 ORDER BY id ASC
 ";

 $result = mysqli_query($db,$query);
 foreach($result as $row)
 {
  $output[] = array(
   'month'   => $row["month"],
   'population'  => floatval($row["population"])
  );
 }
 echo json_encode($output);
}

?>