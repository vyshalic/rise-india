<?php
session_start();
$id=SESSION_id();
$servername="localhost";
$username="root";
$password="x@123456";
$dbname="TribalSports";
$a=$_POST['name'];
$b=$_POST['pwd'];
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(isset($a))
{
    if($a=='admin'&& $b=='admin'){
        header('Location:filter.html');
    }

$sql="select * from Account where username='$a' and password='$b'";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);
if($count == 1)
{
  echo'success';
$_SESSION['username']=$a;
 header('Location:landingPg.php');

}

else
{
	?>
<script>
    
    alert("wrong username or password");

</script>
<?php
}
}

?>
