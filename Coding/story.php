<?php

include('navbar.php')
?>
<!DOCTYPE html>
<html>
 <head>
  <title>WeSmile</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br />
  <h2 align="center"><a href="#">Share Out Anything</a></h2>
  <br />
  <div class="container">
   <form method="POST" id="story_form">
    <div class="form-group">
     <input type="text" name="story_name" id="story_name" class="form-control" placeholder="Enter Name" />
    </div>
    <div class="form-group">
     <textarea name="story_content" id="story_content" class="form-control" placeholder="Enter Your Thoughts" rows="5"></textarea>
    </div>
    <div class="form-group">
     <input type="hidden" name="story_id" id="story_id" value="0" />
     <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
    </div>
   </form>
   <span id="story_message"></span>
   <br />
   <div id="display_story"></div>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 
 $('#story_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_story.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#story_form')[0].reset();
     $('#story_message').html(data.error);
     $('#story_id').val('0');
     load_story();
    }
   }
  })
 });

 load_story();

 function load_story()
 {
  $.ajax({
   url:"fetch_story.php",
   method:"POST",
   success:function(data)
   {
    $('#display_story').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var id = $(this).attr("id");
  $('#story_id').val(id);
  $('#story_name').focus();
 });
 
});
</script>