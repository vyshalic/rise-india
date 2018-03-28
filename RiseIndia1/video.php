  <?php
  
  $d=$_GET['id'];
  
                                $dbase = "TribalSports";
                                $table = "video";

                                $con=mysqli_connect('127.0.0.1','root','x@123456');
                                mysqli_select_db($con,$dbase) or die("Unable to select database");      
                                
                                $xyz="SELECT * FROM video where `appid`= '$d'" ;
                                
                                $result1= mysqli_query($con,$xyz);

                                $r = mysqli_fetch_assoc($result1);
                                ?>
 <video autoplay controls class="svideo">
         <source src="video_uploads/<?php echo $r['filename']; ?>" type="video/mp4">

</video>