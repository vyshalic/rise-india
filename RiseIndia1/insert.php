<?php

 session_start();
 
 $d=$_SESSION['username'];
 
  $con = mysqli_connect('127.0.0.1','root','x@123456');
  if(!$con)
  {
    echo 'not connected';
  }
  if(!mysqli_select_db($con,'TribalSports'))
  {
    echo 'database not connected';
  }
  $f_name = $_POST['firstname'];
  $l_name = $_POST['lastname'];
  $email = $_POST['email'];
  $m_no = $_POST['mobile_number'];
  $gen = $_POST['gender'];
  $add = $_POST['street_address'];
  $state = $_POST['state'];
  $pin = $_POST['code'];
  $age = $_POST['age'];
  
 
          
  $abc = "INSERT INTO PERSONALINFO(uname,fname,lname,email,phone,gender,age,address,state,pin)values('$d','$f_name','$l_name','$email','$m_no','$gen','$age','$add','$state','$pin')";
  if(!mysqli_query($con,$abc))
  {
    echo 'not inserted';
  }
  
//  header("refresh:2;url=sports.html");
  header("Location:sports.html");
?>


