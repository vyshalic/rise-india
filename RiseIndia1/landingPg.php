<!DOCTYPE html>

<html>
    <head>
        <title>Rise India</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
        <style>
            .vis
	{
		visibility:hidden;
	}
            .header{
                   background: #4261ab;
                    color: white;
                    font-size: large;
                    width: 100%;
                    padding: 33px;

            }
            
            .content{
                    margin: 20px auto;
                    width:400px;
                    height:400px;
                    display:grid;
                    grid-template-columns: 200px 200px;
                    grid-row: auto auto;
                    grid-column-gap: 20px;
                    grid-row-gap: 20px;
                    
            .box{
                background-color:#333;
                padding:20px;
                border-radius:10px;
                color:#fff;
                display:flex;
                align-items:center;
                justify-content:center;
                font-size:40px;
                font-family:sans-serif;
              }
            }
            button{
                height: 95%;
                width: 90%;
                border: none;
                color: white;
                background: cadetblue;
                border-radius: 25px;
                font-size: x-large;

            }
        </style>
    </head>
    <body>
        <div class="header">
            
            <div class="vis">
                <div id="google_translate_element">
                    
                </div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>
                <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    
           <?php
           session_start();
         ?>
            Welcome <?=$_SESSION['username'];?> ! 
           
        </div>
       <div class="container">
        <div class="jumbotron">
          <h1>What would you like to do today?</h1>
          <div class="content">
          
              <div class="box"><button type="button" onclick="window.location='profile.html'"><i class="fas fa-upload"></i><br>Upload video</button> </div>
              <div class="box"><button type="button" onclick="window.location='sports.html'"><i class="fas fa-upload"></i><br>Upload video</button></div>
              <div class="box"> <button type="button" onclick="window.location='table.php'"><i class="fas fa-check-circle"></i><br>Status</button></div>
              <div class="box"> <button type="button" onclick="window.location='user_chat/index.php'"><i class="fas fa-comments"></i><br>Chat!</button></div>
          
          </div>
        </div>
        
      </div>
       
    </body>
</html>

