<?php
include("./config.php");
			$query="SELECT * FROM Chatroom";
			$run=mysqli_query($con, $query);
			while($row=mysqli_fetch_array($run)){
if($_SESSION['username']==$row['usrname'])
				{
?>
<p>
			<span style="color:red"><?php echo $row['usrname'].":";?></span>
			<span style="color:blue"><?php echo $row['message'];?></span>
			<span style="color:green"><?php echo $row['reply'];?></span>
			
</p>
<?php
}
}	
?>
