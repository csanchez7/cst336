<?php
session_start();
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Extra Credit</title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
    </head>
    <body>  
        <div id="main" align="center">
            <h1>Extra Credit: Web API / AJAX</h1>
            
            <!--<img src="img/sun.png">-->
            
            <h2>Get Weather</h2>
            <br>
            <form id="form">
                <div class="form-group">
                  <label for="search-term">Enter City Name: </label>
                  <input value="" type="text" id="search-term" class="form-control" placeholder="ex: anaheim">
                </div>
                <div class="form-group">
                  <input type="submit" id="search-submit" class="btn btn-default" value="submit">
                </div>
            </form>
        
            <p><u>Results: </u>
            <strong><span class="query"></span></strong>
            </p>
            
        </div>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
        <script src="js/javascript.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>