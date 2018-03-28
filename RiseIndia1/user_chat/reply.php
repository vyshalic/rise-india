<?php
include("./config.php");
$ques=$_POST['a'];
$re=$_POST['b'];
//if($re.length!=0)
//{
$sql="update Chatroom set reply='$re' where questionid='$ques'";
$result=mysqli_query($con,$sql);
if($result)
{
   echo "done";
}
else
{
   echo "failed";
}
//}
?>

