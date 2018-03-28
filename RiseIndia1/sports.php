<?php

session_start();
$d=$_SESSION['username'];

$name= $_FILES['file']['name'];
$tmp_name= $_FILES['file']['tmp_name'];
$submitbutton= $_POST['submit'];
$position= strpos($name, ".");
$fileextension= substr($name, $position + 1);
$fileextension= strtolower($fileextension);
$description= $_POST['description_entered'];
$success= -1;
$descript= 0;
if (empty($description))
{
$descript= 1;
}
if (isset($name)) {
$path= '/home/b-wi/NetBeansProjects/RiseIndia1/video_uploads/';
if (!empty($name)){
if (($fileextension !== "mp4") && ($fileextension !== "ogg") && ($fileextension !== "webm"))
{
$success=0;
echo "The file extension must be .mp4, .ogg, or .webm in order to be uploaded";
}
else if (($fileextension == "mp4") || ($fileextension == "ogg") || ($fileextension == "webm"))
{
$success=1;

move_uploaded_file($tmp_name, $path.$name);
     }
   }
}
?>
<?php
  $con = mysqli_connect('127.0.0.1','root','x@123456');
  if(!$con)
  {
    echo 'not connected';
  }
  if(!mysqli_select_db($con,'TribalSports'))
  {
    echo 'database not connected';
  }
  $s_name = $_POST['sport_name'];
  if(isset($_POST['tSport'])&&isset($_POST['desc'])&&!empty($_POST['tSport'])&&!empty($_POST['desc']))
      {
      $t_name = $_POST['tSport'];
      $des = $_POST['desc'];
      $sql2 = "INSERT INTO trad_sport(trad_sport_name,trad_sport_description)values('$t_name', '$des')";
      
      mysqli_query($con,$sql2);
      }
      
  $ht = $_POST['ht'];
  $wt = $_POST['wt'];
  $sql = "INSERT INTO SportsInfo(uname,sport,height,weight)values('$d','$s_name','$ht','$wt')";

  
  $abc = "INSERT INTO video(appid,filename,filenameExtension,description) values(LAST_INSERT_ID(),'$name','$fileextension','$description')";
  
      
  if(mysqli_query($con,$sql) && mysqli_query($con,$abc))
  {
     header("refresh:2;url=landingPg.php");
  }
 else
   {
     echo ' not inserted';
   }
?>
