<?php
    include 'connect.php';
    
    $conn = getDBConnection();
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    function displayRandomHero(){
        global $conn;
        
        $sql = "SELECT heroURL FROM superhero";
        
        $stmt = $conn->query($sql);   //This will send the sql you provide
        $stmt->execute();               //This will execute the sql    
        $records = $stmt->fetchALL(PDO::FETCH_ASSOC);   //results of SQL
        // print_r($records);            //used to view results
        
        // foreach($records as $record){
            
        //     echo "<option value='".$record["catId"]."'>".$record["catName"]."</option>";
        // }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Superhero Quiz</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    
    <body>
        <!--Display user and logout button-->
        <!--<div class="user-menu">-->
        <!--    <?php echo "Welcome ".$_SESSION['username']."! ";?> -->
        <!--</div>-->
        
        <form>
            <!--Display Quiz Content-->
            <div id="quiz">
                <h1>Superhero Quiz</h1>

                <div id="randomHero">
                    <b><u>Which Superhero is this?</u></b>
                        
                        <?php 
                        
                        $r = rand(0,16);
                        $records = displayRandomHero(); 
                        

                        ?>
                        
                        <img src="" alt="hero">
                    <br><br>
                </div>
            
                <select name="category">
                    <option value="">Select One</option>
                    <option value="bruceBanner" name="heroName">Bruce Banner</option>
                    <option value="bruceWayne" name="heroName">Bruce Wayne</option>
                    <option value="clarkKent" name="heroName">Clark Kent</option>
                    <option value="dianaPrince" name="heroName">Diana Prince</option>
                    <option value="peterParker" name="heroName">Peter Parker</option>
                    <option value="steveRogers" name="heroName">Steve Rogers</option>
                    <option value="tonyStark" name="heroName">Tony Stark</option>
                </select>
            </div>

                <div id="feedback">
                    <h2>Number of times the real name of <span id="hero"></span> was answered correctly: <span id="rightTimes"></span></h2><br>
                    <h2>Number of times it was answered incorrectly: <span id="wrongTimes"></span></h2>
                <br />
                </div>

            </div>

        </div>
        
        </form>
        <!--Javascript files-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/javascript.js"></script>
    </body>
</html>