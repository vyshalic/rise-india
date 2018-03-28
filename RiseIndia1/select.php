<?php

 session_start();
 
  $con = mysqli_connect('127.0.0.1','root','x@123456');
  if(!$con)
  {
    echo 'not connected';
  }
  if(!mysqli_select_db($con,'TribalSports'))
  {
    echo 'database not connected';
  }
  $selected = $_POST['select2'];
 
  foreach ($selected as $select){ 
      
    $f = explode(",",$select);
    
//    echo $f[0]."<br />";
//    echo $f[1]."<br/>";
    //get appid and store it in d and f
        $d=$f[0];
        $g=$f[1];
        
    //check if appid already exists ->update
        $abc="select appid from appstatus where appid='$d'";
        $result = mysqli_query($con,$abc);
        $count=mysqli_num_rows($result);
        echo $count;
        if($count == 1)
        {
          
            $dhg="UPDATE appstatus set status='$g' where appid='$d'";
          
             $var=mysqli_query($con,$dhg);
                         
               
        }
         else {
            
            $dfg= "select s.uname , 
                    p.`state`
                    from SportsInfo s , PERSONALINFO p 
                    WHERE s.uname=p.uname
                    and s.appid='$d' ";
            
           $result = mysqli_query($con,$dfg);
            
            $count=mysqli_num_rows($result);
            //echo $count;
           
           $row = mysqli_fetch_array($result);

                    $j= $row[0];   
                      $k=$row[1];  
                      
//                      echo $j;
//                      echo $k;
          
            $fgh="insert into appstatus (uname,appid,status,`state`) values('$j','$d','$g','$k')";
                $ch=mysqli_query($con,$fgh);
                        
         }
         if($var || $ch){
             
              header("Location:filter.html");
             
         }
         
         
         
    
}


?>


