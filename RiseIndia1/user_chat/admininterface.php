<html><head>
<link rel="stylesheet" href="adminstyle.css"></link>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></link>
<style>
    .vis
	{
		visibility:hidden;
	}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<?php
include("./config.php");
			$query="SELECT * FROM Chatroom";
			$run=mysqli_query($con, $query);
			while($row=mysqli_fetch_array($run)){
				if(is_null($row['reply']))
				{
				
?>
</head>

<body>
    
    
    
<table>
	<tr>
		<td id="un"><?php echo $row['usrname'].":";?></td>
		<td id="rm"><?php echo $row['message']?></td>
		<td><textarea id="reply" cols="78" rows="3" ></textarea></td>
		<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input id='<?php echo $row['questionid']?>' type="button" value="Reply" onclick="replyquestion(this.id)"></td>
	</tr>
</table>
</body>
<?php
}
}	
?>
<script type="text/javascript">
	function replyquestion(id)
	{
		
		var r=document.getElementById("reply").value;
        
			$.ajax({
				url:'reply.php',
				type:'POST',
				data:{
				    a:id,
					b:r

				},
                success:function(data)
                {
                	if(r.length==0)
                	{
                		alert("Please enter the reply");
                		return ;
                	}
                	else(data=="done")
                	{
                		alert("Your reply has been sent!");
                	}
                }

			});
           
	}
</script>
</html>