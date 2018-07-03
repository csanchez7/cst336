<?php
    $backgroundImage="img/sea.jpg";
    
    //API call goes here
    if (isset($_GET['keyword'])) {
        include 'api/pixabayAPI.php';
        $keyword = $_GET['keyword'];
        $orientation = $_GET['layout'];
        $imageURLs = getImageURLs($keyword,$orientation);
        $backgroundImage=$imageURLs[array_rand($imageURLs)];
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Image Carousel</title>
        <meta charset="UTF-8">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        
        <style>
            @import url("css/styles.css");
            body{
                background-image: url('<?= $backgroundImage ?>');
            }
        </style>
    </head>

    <body>
        <br/> <br />
        <?php
            if (!isset($imageURLs)) { //form has not been submitted
                echo "<h2>Type a keyword to display a slideshow <br />
                with random images from Pixabay.com. </h2>";
            }else{ //form was submitted
                //print_r($imageURLs);    //checking that $imageURLs is not null
        ?>
            
        <!--DisplayCarousel Here-->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            
            <!--Indicators-->
            <ol class = "carousel-indicators">
                <?php
                    for ($i=0;$i<7;$i++){
                        echo"<li data-target='#carouselExampleIndicators' data-slide-to='$i'";
                        echo ($i==0)? "class = 'active'": "";
                        echo "></li>";
                    }
                ?>
            </ol>


            <!--Wrapper for Images-->
            <div class = "carousel-inner" role="listbox">
                <?php
                    for($i=0; $i<7; $i++){
                        do{
                            $randomIndex = rand(0,count($imageURLs));
                        }while (!isset($imageURLs[$randomIndex]));
                
                        echo '<div class="carousel-item';
                        echo($i == 0)?" active": "";
                        echo '">';
                        echo '<img src="'. $imageURLs[$randomIndex].'">';
                        echo '</div>';
                        unset($imageURLs[$randomIndex]);
                    }
                ?>
            </div>
                    
            <!--Controls Here-->
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
            <?php
                }//End of the else statement
            ?>
            <br>
            
            <!--html Form-->
            <form>
                <input type="text" name="keyword" placeholder="keyword" value= "<?=$_GET['keyword']?>"/>
                
                <input type="radio" id="lhorizontal" name="layout" value = "horizontal">
                <label for = "Horizontal"></label><label for="lhorizontal">Horizontal</label>
                
                <input type="radio" id="lvertical" name="layout" value = "vertical">
                <label for = "Vertical"></label><label for="lvertical">Vertical</label>
                
                <select name = "catagory">
                    <option value="">Select One</option>
                    <option value="ocean">Ocean</option>
                    <option value="sky">Sky</option>
                    <option value="forest">Forest</option>
                    <option value="otters">Otters</option>
                    <option value="apple">Apple</option>
                </select>
                <input type="submit" value="Search"/>
            </form>
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    </body>

</html>