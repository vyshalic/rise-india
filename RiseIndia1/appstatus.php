<html>
<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">      
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <link rel="stylesheet" href="app.css">
</head>
<body>
<!--replace 123 by usrname from session values;-->
<div class="container">
         <form action="table.php" method="get">
        <div class="form-group">
            <br><br> 
            Application no  <input type="text" class="form-control" value="123" name="no" id="app"><br>
            <table>
                <tr><img src="tick.png" height="50px" width="50px">Selected</tr>
               
                <br>
                 <tr><img src="wrong.jpg" height="40px" width="40px" id="w"> rejected</tr>
                   <tr><td><div id="box"></div></td><td>  in progress</td></tr>
            </table>
                <input type="submit" class="btn btn-primary" name="a1" value="submit">
           
        </div>
              </form>
            <br>
        </div>
</body>
</html>