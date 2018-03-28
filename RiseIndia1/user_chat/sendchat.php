<?php
include("./config.php");
$uname = $_SESSION['username'];
$umessage=$_POST['umessage'];
$query="INSERT INTO Chatroom (usrname,message) VALUES('$uname','$umessage') ";
$run = mysqli_query($con,$query);
?>

