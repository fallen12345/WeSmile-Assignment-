<?php

//add_comment.php

//$connect = new PDO('fdb20.awardspace.net', '3052600_calvin', 'calvin12', '3052600_calvin');
$connect = new PDO('mysql:host=fdb20.awardspace.net;dbname=3052600_calvin', '3052600_calvin', 'calvin12');

$error = '';
$story_name = '';
$story_content = '';

if(empty($_POST["story_name"]))
{
 $error .= '<p class="text-danger">Name is required</p>';
}
else
{
 $story_name = $_POST["story_name"];
}

if(empty($_POST["story_content"]))
{
 $error .= '<p class="text-danger">Words is required</p>';
}
else
{
 $story_content = $_POST["story_content"];
}

if($error == '')
{
 $query = "
 INSERT INTO tbl_story 
 (parent_story_id, story, story_sender_name) 
 VALUES (:parent_story_id, :story, :story_sender_name)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':parent_story_id' => $_POST["story_id"],
   ':story'    => $story_content,
   ':story_sender_name' => $story_name
  )
 );
 $error = '<label class="text-success">Successfully Added</label>';
}

$data = array(
 'error'  => $error
);

echo json_encode($data);

?>