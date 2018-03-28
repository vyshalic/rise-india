

    <?php

    session_start();
    

    $link = mysqli_connect("localhost", "root", "x@123456", "TribalSports");


    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }

    if(isset($_POST['state'])){
         $a=$_POST['state'];
         
          $sql = "select s.appid ,
       a.fname,
       s.sport,
       p.age,
       p.`state`
       FROM Account a , PERSONALINFO p , SportsInfo s 
       WHERE a.username=p.uname
       AND p.uname=s.uname
       AND p.state='$a'";
    }
    if($_POST['Sports']){
          $b=$_POST['Sports'];
        
           $sql = "select s.appid ,
       a.fname,
       s.sport,
       p.age,
       p.`state`
       FROM Account a , PERSONALINFO p , SportsInfo s 
       WHERE a.username=p.uname
       AND p.uname=s.uname
       AND s.sport='$b'";
    }
    if($_POST['Age']){
          $c=$_POST['Age'];
          if($c=='15-19'){
              
              $sql = "select s.appid ,
                        a.fname,
                        s.sport,
                        p.age,
                        p.`state`
                        FROM Account a , PERSONALINFO p , SportsInfo s 
                        WHERE a.username=p.uname
                        AND p.uname=s.uname
                        AND p.age > 15
                        AND p.age < 19;";
          }
           if($c=='20-25'){
               
               $sql = "select s.appid ,
                        a.fname,
                        s.sport,
                        p.age,
                        p.`state`
                        FROM Account a , PERSONALINFO p , SportsInfo s 
                        WHERE a.username=p.uname
                        AND p.uname=s.uname
                        AND p.age > 20
                        AND p.age < 25;";
          }
           if($c=='25-30'){
               
               $sql = "select s.appid ,
                        a.fname,
                        s.sport,
                        p.age,
                        p.`state`
                        FROM Account a , PERSONALINFO p , SportsInfo s 
                        WHERE a.username=p.uname
                        AND p.uname=s.uname
                        AND p.age > 25
                        AND p.age < 30;";
          }
    }
    // Attempt select query execution

   $result = mysqli_query($link, $sql);
   ?>

       <html>
<head>
  
        <link href="https://fonts.googleapis.com/css?family=Muli|PT+Sans+Caption" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Muli|PT+Sans+Caption|Varela" rel="stylesheet"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
	<title>RiseIndia</title>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;		
                        font-family: 'PT Sans Caption', sans-serif;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-size: 12px;
                        float:left;
                        
		}

		h1 {
			text-align: center;
                        text-transform: uppercase;
                        font-size: 40px;
                        background: darkcyan;
                        color: white;
                        padding: 25px;


		}
                
                tr{
                    font-size: x-large;
                    border-bottom: 2px solid #a6a6c3;
                    text-align: center;

                }
		table td {
			transition: all .5s;
                        padding:28px;
                        text-align: center;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 20px;
			min-width: 537px;
                        width:100%;
		}

		.data-table th, 
		.data-table td {
			border: none;
			padding: 23px;
                        text-align: center;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
                        text-align: center;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
                        text-align: center;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: center;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
                    background-color: #061920e6;;
			color: white;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
                #button_play{
                    background: #ed4a4a;
                    color: whitesmoke;
                    padding: 13px;
                    border-radius: 100%;
                }
                #button_confirm{
                   float: right;
                    margin: 20px;
                    height: 54px;
                    width: 20%;
                    border: none;
                    background: #439c3a;
                    border-radius: 25px;
                    color: white;
                    font-size: 20px;
                }
                
                .icon-bar {
                    width: 90px; /* Set a specific width */
                    background-color: #555; /* Dark-grey background */
                    float: left;
                    height: 100%;
                }

                .icon-bar a {
                    display: block; /* Make the links appear below each other instead of side-by-side */
                    text-align: center; /* Center-align text */
                    padding: 16px; /* Add some padding */
                    transition: all 0.3s ease; /* Add transition for hover effects */
                    color: white; /* White text color */
                    font-size: 36px; /* Increased font-size */
                }

                .icon-bar a:hover {
                    background-color: #000; /* Add a hover color */
                }

                .active {
                    background-color: #4CAF50; /* Add an active/current color */
                }
                .content2{
                    display:flow-root;
                }
                .fa-chart-area,.fa-power-off,.fa-user-circle{
                    color: #87c323;
                }
                .fa-trophy{
                    color: gold;
                }
                .fa-chart-area,.fa-power-off,.fa-user-circle,.fa-trophy{
                    margin-top:50px;
                }
                
	</style>
</head>
<body>
    
    <div class="content">
        <div class="icon-bar">
            <a href="geochart.php"><i class="fas fa-chart-area"></i></a>
            <a href="filter.html" class="active"><i class="fas fa-trophy"></i></a>
            <a href="user_chat/admininterface.php"><i class="fas fa-comments"></i></a>
            <a href="#"><i class="fas fa-power-off"></i></a>
          </div>
        <div class="content2">
            <div class="vis">
                <div id="google_translate_element">
                    
                </div>
                <script type="text/javascript">
                function googleTranslateElementInit() {
                  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                }
                </script>
                <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	<h1>Applied Candidates</h1>
	<table class="data-table table-responsive">
		<thead>
			<tr>
				<th>APPLICATION NO</th>
				<th>NAME</th>
				<th>SPORT</th>
				<th>AGE</th>
				<th>STATE</th>
                                <th>VIDEO</th>
                                <th>SELECT</th>
			</tr>
		</thead>
		<tbody>
               <?php
            $no= mysqli_num_rows($result);
            echo $no;
            while($row = mysqli_fetch_array($result)){
                
                
                echo "<tr>";
                
                    $d = $row[0];   
                        
                    echo "<td>" . $row[0] . "</td>";

                    echo "<td>" . $row[1] . "</td>";

                    echo "<td>" . $row[2] . "</td>";

                    echo "<td>" . $row[3] . "</td>";
                    
                    echo "<td>" . $row[4] . "</td>";
                    
                    
            
            ?>
                <td>  
                    
                     <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                        <i class="fa fa-play"></i>
                    </button>
                 
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title" id="myModalLabel"><?php echo $row[2]; ?></h4>
                            </div>
                            <div class="modal-body">
                         
                              
                           
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                    </div>
                    
           
                </td>
                <td>
                    
                    <form action="select.php" method="post"> 
                         <select name="select2[]">
                            <option value="<?php echo $row[0]?>">-----Select app status----</option>
                            <option value="<?php echo $row[0]?> , selected">Selected</option>
                            <option value="<?php echo $row[0]?> , waiting">Waiting List</option>
                            <option value="<?php echo $row[0]?> , rejected">Rejected</option>
                            
                          </select> 
                    </td>

             <?php
                echo "</tr>";

            }?>
              </tbody>
	</table>
        <footer>
            <input type="submit" value="Confirm" id="button_confirm"/></form>
        </footer>
        </div>
    
    </div>
     <script>
//            function redir(id) {
//              window.location="video.php?a"+id;
//            }
//            
//            $('#myModal').on('shown.bs.modal', function () {
//  $('#video1')[0].play();
//})
//            $('#myModal').on('hidden.bs.modal', function () {
//  $('#video1')[0].pause();
//})
          </script>
          <script>
        $('.openBtn').on('click',function(){
            $('.modal-body').load('video.php?id=<?php echo $d ?>',function(){
                $('#myModal').modal({show:true});
            });
        });
        </script>
    </body>
        </html>      
              
<?php
    mysqli_free_result($result);

    mysqli_close($link);

    ?>
