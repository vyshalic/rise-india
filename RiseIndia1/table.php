<html>
<head>
<link rel="stylesheet" href="firstcss.css">

<link rel=stylesheet href=firstcss.css>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body></body>
</html>

<?php

session_start();

$l=$_SESSION['username'];

$servername="localhost";
$username="root";
$password="x@123456";
$dbname="TribalSports";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
	//replace pranz by session _usrname;
$sql="select * from appstatus where uname='$l'";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);
?>
<div class="container">
        <table  class="table table-striped table-dark" width=25% align=center >
        <center><h1></br></br>STATUS</h1></center>
		<tr>
		<td  id=n1>Application Id </td>
        <td id=n1>UserName</td>
        <td id=n1>Sport</td>
        <td id=n1>Status</td>
		</tr>
		<?php
 while($row = mysqli_fetch_array($result)){
       
                echo "<tr>";
                    echo "<td>" . $row[0] . "</td>";

                    echo "<td>" . $row[1] . "</td>";

                    echo "<td>" . $row[2] . "</td>";
                    
                    $abxy='rejected';
                    $b='selected';
                    $c='waiting';
                    
                    
					$selected=strcmp($row[3],$b);
					if ($selected==0){ ?>
					<td><img src="tick.png" height="30px" width="30px">
					<?php
					echo $row[3];}
					$rejected=strcmp($row,$abxy);
                                        echo $rejected;
					 if($rejected==0){?>
						<td><img src="wrong.jpg" height="30px" width="30px">
					<?php	
					echo $row[3] ;}
					$progress=strcmp($row[3],$c);
					 if($progress==0)
						{?>
					<td><img src="0range.png" height="30px" width="30px">
					<?php
					echo $row[3];}
						//echo 'success';
					echo "</td>";
					echo "</tr>";

}
?>
</table>
</div>
<?php
}	
?>