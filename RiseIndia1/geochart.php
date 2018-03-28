<?php
session_start();
/*if($_SESSION['username']==true)
echo 'welcome'.' '.$_SESSION['username'];
else
echo 'redirected';*/
	$connect=mysqli_connect("localhost","root","x@123456","TribalSports");
	$query="SELECT * from appstatus";
	$result=mysqli_query($connect,$query);
  $no=mysqli_num_rows($result);
echo $no;
?>

<!DOCTYPE html>
<html lang="en-US">
<center>
<h2>Selected Candidates</h2>
<div id="geochart" style="width: 900px; height:500px;"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['geochart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values

function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['State', 'people'],
    //['Uttar Pradesh', 199581477],
   //['Maharashtra', 112372972],
    //['Bihar', 103804637]
	<?php
		while( $row= mysqli_fetch_array($result))

		{
			echo "['".$row['state']."',".$row['status']."],";
		}
	?>
]);
  // Optional; add a title and set the width and height of the chart
  var options = {
  	 region: 'IN',
    displayMode: 'regions',
    resolution: 'provinces',
    width: 640, 
    height: 480,
      colorAxis: {colors: ['#e7711c', '#4374e0']}
  };

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.GeoChart(document.getElementById('geochart'));
  chart.draw(data, options);
}
</script>
</center>
</body>
</html>