$(document).ready(function(){
	// check change event of the text field 
	$("#username").keyup(function(){
		// get text username text field value 
		var username = $("#username").val();

		// check username name only if length is greater than or equal to 1
		if(username.length >= 1)
		{
			$("#status").html('<img src="gif.jpg" /> Checking ...');
			// check username 
			$.post("check.php", {username: username}, function(data, status){
					$("#status").html(data);
			});
		}
		
	});
});