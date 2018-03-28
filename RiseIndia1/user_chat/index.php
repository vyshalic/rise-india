<?php
include("./config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>chat</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript">
		$(document).ready(function(e)
		{
			function displaychat()
			{
			$.ajax({
				url:'displaychat.php',
				type:'POST',
				success: function(data){
					$("#chatdisplay").html(data);
				}
				});
			}
			setInterval(function(){displaychat(); },1000);
			$('#sendmsgbtn').click(function(e){
			
			var message= $("#message").val();
			if(message=="")
			{
				alert("please enter a message");
				return ;
			}

			$("#mychatform")[0].reset();

			$.ajax({
				url:'sendchat.php',
				type:'POST',
				data:{
				
					umessage:message

				}
                 

			});
			});
		});
	</script>
       

</head>
<body>
    
 
    
<div class="container fluid">
<!--	<h3 class="text-center">Chat here!</h3> -->


	<div class="well " id="chatbox">
		<div id="chatdisplay"></div>
		
	</div>
	<form id="mychatform">
		
		<textarea name="message" id="message" cols="30" rows="3" placeholder="Enter your grievances"></textarea><br>
		<button type="button" class="btn btn-success btn-lg" id="sendmsgbtn">Send Message</button>
	</form>

</div>
</body>

</html>