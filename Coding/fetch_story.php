<?php

//fetch_comment.php
$dbhost='fdb20.awardspace.net';
$dbuser='3052600_calvin';
$dbpass="calvin12";
$dbname='3052600_calvin';

//$connect = new mysqli('fdb20.awardspace.net', '3052600_calvin', 'calvin12', '3052600_calvin');
$connect = new PDO('mysql:host=fdb20.awardspace.net;dbname=3052600_calvin', '3052600_calvin', 'calvin12');

$query = "
SELECT * FROM tbl_story
WHERE parent_story_id = '0' 
ORDER BY story_id DESC
";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();
$output = '';
foreach($result as $row)
{
 $output .= '
 <div class="panel panel-default">
  <div class="panel-heading">By <b>'.$row["story_sender_name"].'</b> on <i>'.$row["date"].'</i></div>
  <div class="panel-body">'.$row["story"].'</div>
  <div class="panel-footer" align="right"><button type="button" class="btn btn-default reply" id="'.$row["story_id"].'">Reply</button></div>
 </div>
 ';
 $output .= get_reply_story($connect, $row["story_id"]);
}

echo $output;

function get_reply_story($connect, $parent_id = 0, $marginleft = 0)
{
 $query = "
 SELECT * FROM tbl_story WHERE parent_story_id = '".$parent_id."'
 ";
 $output = '';
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $count = $statement->rowCount();
 if($parent_id == 0)
 {
  $marginleft = 0;
 }
 else
 {
  $marginleft = $marginleft + 48;
 }
 if($count > 0)
 {
  foreach($result as $row)
  {
   $output .= '
   <div class="panel panel-default" style="margin-left:'.$marginleft.'px">
    <div class="panel-heading">By <b>'.$row["story_sender_name"].'</b> on <i>'.$row["date"].'</i></div>
    <div class="panel-body">'.$row["story"].'</div>
    <div class="panel-footer" align="right"><button type="button" class="btn btn-default reply" id="'.$row["story_id"].'">Reply</button></div>
   </div>
   ';
   $output .= get_reply_story($connect, $row["story_id"], $marginleft);
  }
 }
 return $output;
}

?>