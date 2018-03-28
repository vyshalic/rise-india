<?php
include("./config.php");
$uname = $_SESSION['username'];
$umessage=$_POST['umessage'];

$query="INSERT INTO Chatroom (usrname,reply) VALUES('$uname','$areply') ";
$run = mysqli_query($con,$query);
?>

