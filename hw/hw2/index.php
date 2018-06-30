<!doctype html>

<html lang="en">
    
<head>
  <meta charset="utf-8">
  <title>Modern Hip Hop Classics</title>
  <meta name="description" content="Modern Hip Hop Classics">
 
  <style> 
  @import url(css/styles.css);
  </style>
  
<body background = "img/hiphopwallpaper2.jpg">
    <header>
        <h1>Hip Hop Classics</h1>
        <br/>    
    </header>
    
    <div id="main">
        
        <?php
        include 'inc/functions.php';
    
        randomAlbum();
        ?>
        
        <?php
        echo "</br>"
        ?>
        
        <?php
        randomRelatedArtists();
        ?>
    
        <form>
            <br>
            <input type="submit" value="Random A Classic!"/>
        </form>
        
        </div>
</body>

</html>