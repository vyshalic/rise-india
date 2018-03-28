<!DOCTYPE html>
<html>
<head>
	
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style type="text/css">
  	#wre
  	{
  		width: 300px;
  		float: right;
  		border-radius:12px;
  		background-color: white;
  		border-color: blue;
  		border:solid;

  	}
  	#gr
  		{
  			background-color: white;
  			border-radius:12px;
  			width:500px;
  			border-color: blue;
  			border:solid;

  		}
                    
         .vis
	{
		visibility:hidden;
	}

  </style>
</head>
<?php
include("./config.php");
			$query="SELECT * FROM Chatroom";
			$run=mysqli_query($con, $query);
			while($row=mysqli_fetch_array($run)){
				
if($_SESSION['username']==$row['usrname'])
				{
?>
<div class="design">
	<div id="trial">
		    <div class="alert alert-info" id="gr">
			<span style="color:red"><?php echo $row['usrname']." : ";?></span>
			<span style="color:blue"><?php echo $row['message'];?></span></div>
			</div>
			<div class="alert alert-success" id="wre">
			<span style="float:right" ><?php
            if(is_null($row['reply']))
            {
            	echo " Not yet answered";
            }
            else
            {
            	echo $row['reply'];
            }
			?></span>
			<br>
		</div>
		<br><br>
</div>
<?php
}
}

?>

</html>