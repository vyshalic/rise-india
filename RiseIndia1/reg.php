<?php
session_start();
$servername="localhost";
$username="root";
$password="x@123456";
$dbname="TribalSports";
$name=$_POST['name'];
$pwd=$_POST['pwd'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];

$_SESSION['username']=$name;

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
die("connection failed".$conn->connect_error);
}
$check="SELECT * FROM Account where username='$name'";
$result=mysqli_query($conn,$check);
$count=mysqli_num_rows($result);
if($count==0)
{
	$sql="INSERT INTO Account (fname,username,password,lname) values('$fname','$name','$pwd','$lname')";
$query=mysqli_query($conn,$sql);
if($query)
{
 echo "<script> window.location.assign('regpage.html'); </script>";
}
}
else
{
?>
<script>
alert("User already eixsts");
</script>
<?php
}
?>