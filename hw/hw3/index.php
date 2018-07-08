<?php
    include 'inc/functions.php';

    // if (isset($_POST['name'])){
    //   $name = $_POST['name'];
    //   echo "name: $name";
      
    //   if (isset($_POST['ageRange'])){
    //       $name = $_POST['ageRange'];
    //       echo "ageRange: $ageRange";
    //       if ($ageRange=="young"){
    //           $ageRange = array_merge($young);
    //       }else if($ageRange=="middle"){
    //           $ageRange = array_merge($middle);
    //       }else if($ageRange=="old"){
    //           $ageRange = array_merge($old);
    //       }
    //       print_r($ageRange);
           
    //       if (isset($_POST['audience'])){
    //           $audience = $_POST['audience'];
    //           echo "audience: $audience";
    //           if ($audience=="boys"){
    //               $audience = array_merge($Boys);
    //           }else if($audience=="girls"){
    //               $audience = array_merge($Girls);
    //           }else if($audience=="adults"){
    //               $audience = array_merge($Adults);
    //           }
    //         //   print_r($audience);
               
    //           if(isset($_POST['genreChoice'])){
    //             $genre = $_POST['genreChoice'];
    //             for ($i=0; $i<count($genre); $i++) {
    //                 echo "genre:". $genre[$i] ."<br>";
    //             }
    //             if(in_array("Action", $genre)&&in_array("Comedy", $genre)&&in_array("Campy", $genre)&&in_array("PSA", $genre)){
    //                 $genre = array_merge($action,$comedy,$campy,$psa);
    //             }else if(count($genre)==3&&!in_array("Action", $genre)){
    //                 $genre = array_merge($psa,$comedy,$campy);
    //             }else if((count($genre)==3)&&(!in_array("PSA", $genre))){
    //                 $genre = array_merge($action,$comedy,$campy);
    //             }else if((count($genre)==3)&&(!in_array("Comedy", $genre))){
    //                 $genre = array_merge($action,$psa,$campy);
    //             }else if((count($genre)==3)&&(!in_array("Campy", $genre))){
    //                 $genre = array_merge($action,$psa,$comedy);
    //             }else if(in_array("Campy", $genre)&&in_array("Action", $genre)){
    //                 $genre = array_merge($campy,$action);
    //             }else if(in_array("Comedy", $genre)&&in_array("Action", $genre)){
    //                 $genre = array_merge($comedy,$action);
    //             }else if(in_array("PSA", $genre)&&in_array("Action", $genre)){
    //                 $genre = array_merge($psa,$action);
    //             }else if(in_array("PSA", $genre)&&in_array("Action", $genre)){
    //                 $genre = array_merge($psa,$action);
    //             }else if(in_array("Campy", $genre)&&in_array("Comedy", $genre)){
    //                 $genre = array_merge($campy,$comedy);
    //             }else if(in_array("Campy", $genre)&&in_array("PSA", $genre)){
    //                 $genre = array_merge($campy,$psa);
    //             }else if(in_array("Comedy", $genre)&&in_array("PSA", $genre)){
    //                 $genre = array_merge($psa,$comedy);
    //             }else if((count($genre)==1)&&(in_array("Action", $genre))){
    //                 $genre = $action;
    //             }else if((count($genre)==1)&&(in_array("Comedy", $genre))){
    //                 $genre = $comedy;
    //             }else if((count($genre)==1)&&(in_array("PSA", $genre))){
    //                 $genre = $psa;
    //             }else{
    //                 $genre = $campy;
    //             }
    //             $genre = array_unique($genre);
    //             // print_r($genre);
    //           }
    //       }
    //   }
    //   randomFromMatches($genre,$ar2,$ar3);
    // }

    // if (isset($_POST['name'])){
    //     $name = $_POST['name'];
    //     echo "name: $name";
    //     echo "<br>";
    // }
    // if (isset($_POST['ageRange'])){
    //     $ageRange = $_POST['ageRange'];
    //     echo "ageRange: $ageRange";
    //     echo "<br>";
    // }
    
    // if (isset($_POST['audience'])){
    // $audience = $_POST['audience'];
    // echo "audience: $audience";
    // echo "<br>";
    // }
    
    // if(isset($_POST['genreChoice'])){
    //     $genre = $_POST['genreChoice'];
    //     for ($i=0; $i<count($genre); $i++) {
    //         echo "genre:". $genre[$i] ."<br>";
    //     }
    //     if(in_array("Action", $genre)&&in_array("Comedy", $genre)&&in_array("Campy", $genre)&&in_array("PSA", $genre)){
    //         $genre = array_merge($action,$comedy,$campy,$psa);
    //     }else if(count($genre)==3&&!in_array("Action", $genre)){
    //         $genre = array_merge($psa,$comedy,$campy);
    //     }else if((count($genre)==3)&&(!in_array("PSA", $genre))){
    //         $genre = array_merge($action,$comedy,$campy);
    //     }else if((count($genre)==3)&&(!in_array("Comedy", $genre))){
    //         $genre = array_merge($action,$psa,$campy);
    //     }else if((count($genre)==3)&&(!in_array("Campy", $genre))){
    //         $genre = array_merge($action,$psa,$comedy);
    //     }else if(in_array("Campy", $genre)&&in_array("Action", $genre)){
    //         $genre = array_merge($campy,$action);
    //     }else if(in_array("Comedy", $genre)&&in_array("Action", $genre)){
    //         $genre = array_merge($comedy,$action);
    //     }else if(in_array("PSA", $genre)&&in_array("Action", $genre)){
    //         $genre = array_merge($psa,$action);
    //     }else if(in_array("PSA", $genre)&&in_array("Action", $genre)){
    //         $genre = array_merge($psa,$action);
    //     }else if(in_array("Campy", $genre)&&in_array("Comedy", $genre)){
    //         $genre = array_merge($campy,$comedy);
    //     }else if(in_array("Campy", $genre)&&in_array("PSA", $genre)){
    //         $genre = array_merge($campy,$psa);
    //     }else if(in_array("Comedy", $genre)&&in_array("PSA", $genre)){
    //         $genre = array_merge($psa,$comedy);
    //     }else if((count($genre)==1)&&(in_array("Action", $genre))){
    //         $genre = $action;
    //     }else if((count($genre)==1)&&(in_array("Comedy", $genre))){
    //         $genre = $comedy;
    //     }else if((count($genre)==1)&&(in_array("PSA", $genre))){
    //         $genre = $psa;
    //     }else{
    //         $genre = $campy;
    //     }
    //     $genre = array_unique($genre);
    //     print_r($genre);
    // }
    if (isset($_POST['name'])){
        $name = $_POST['name'];
    }
    
    if (isset($_POST['ageRange'])){
        $ageRange = $_POST['ageRange'];
        $ageArray = checkAgeRange($ageRange);
        // print_r($ageArray);
        // echo "<br>";
    
        if (isset($_POST['audience'])){
            $audience = $_POST['audience'];
            $audienceArray = checkAudience($audience);
            // print_r($audienceArray);
            // echo "<br>";
            
            if(isset($_POST['genreChoice'])){
                $genre = $_POST['genreChoice'];
                $genreArray=checkGenre($genre);
                // print_r($genreArray);
                // echo "<br>";
                
                $matches = array_intersect($genreArray,$audienceArray,$ageArray);
                $matches = array_unique($matches);  //creates array of unique matches from previous arrays
                $random = array_rand($matches);     //returns random key from matches array
                $cartoonName = $matches[$random];          //name of cartoon match from matches array
            }
        }
    }
    
    

?>


<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Homework 3</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="css/styles.css?v=1.0">

</head>

<body>
    <?php
    if (!isset($matches)){
        echo "Please complete all forms!";
    }else if(empty($name)){
        echo "Enter your name.";
    }else if(empty($ageRange)){
        echo "Enter choose genre(s).";
    }else if(empty($audience)){
        echo "Please choose age range.";
    }else if(empty($genre)){
        echo "Please choose a target audience.";
    }

    ?>
    
    
    <div id="titles">
    <h2 id="title">What Saturday Morning Cartoon Should You Watch?<br></h2>
    <b id="subtitle">Find a random show based on your interests!</b>
    </div>
    <form method="post">
    <?php
        if (isset($cartoonName)){
            echo "<div id='cartoonName'>";
            echo "<h4> Hey $name, based on your input, you'll really enjoy $cartoonName!</h4>";
            echo "<br>";
            imageDisplay($cartoonName);
            echo "</div>";
        }
    ?>
    
    
    
        <div id="nameDiv">
            <b><u>What's your name?</u></b>
            <br><br>
            <input value="<?php echo htmlspecialchars($_POST['name']); ?>" type="text" name="name" placeholder="Enter Name">
            <br>
        </div>
        
        <div id="ageDiv">
            <b><u>What Age Range Are You In?</u></b>
            <br><br>
            
            <input <?php if (isset($ageRange) && $ageRange=="young") echo "checked"; ?> type="radio" id="age" name="ageRange"  value="young">
            <label for="young">2-16</label>
            
            <input <?php if (isset($ageRange) && $ageRange=="middle") echo "checked"; ?> type="radio" id="age" name="ageRange"  value="middle">
            <label for="middle">17-49</label>
            
            <input <?php if (isset($ageRange) && $ageRange=="old") echo "checked"; ?> type="radio" id="age" name="ageRange" value="old">
            <label for="old">49 and up</label>

        </div>
        
        <div id="genreDiv">
            <div id="genreTitle"><b><u>Choose A Genre</u></b></div>
            <br><br>
            <input type="checkbox" <?php if(isset($_POST['genreChoice'])&&in_array("Action",$genre)) echo "checked='checked'"; ?> id="genre" name="genreChoice[]" value = "Action">
            <label for="Action">Action-adventure</label>
            <br>
            <input type="checkbox" <?php if(isset($_POST['genreChoice'])&&in_array("Comedy",$genre)) echo "checked='checked'"; ?> id="genre" name="genreChoice[]" value ="Comedy">
            <label for="Comedy">Comedy</label>
            <br>
            <input type="checkbox" <?php if(isset($_POST['genreChoice'])&&in_array("PSA",$genre)) echo "checked='checked'"; ?> id="genre" name="genreChoice[]" value ="PSA">
            <label for="PSA">Public Service Announcement</label>
            <br>
            <input type="checkbox" <?php if(isset($_POST['genreChoice'])&&in_array("Campy",$genre)) echo "checked='checked'"; ?> id="genre" name="genreChoice[]" value ="Campy">
            <label for="Campy">Campy</label>
        </div>
        
        <div id="audienceDiv">
        <b><u>Choose A Target Audience</u></b>
        <br><br>
            <select name="audience">
                <option value="">Select One</option>
                <option <?php if($audience == 'boys') { ?> selected <?php } ?> value="boys" name="audience">Boys</option>
                <option <?php if($audience == 'girls') { ?> selected <?php } ?> value="girls" name="audience">Girls</option>
                <option <?php if($audience == 'adults') { ?> selected <?php } ?> value="adults" name="audience">Adults</option>
            </select>
            
        </div>
        <br>
        <br>
        <input id="submit" type="submit" value="Find Your Cartoon"/>
    
    </form>
        
        <hr width="60%">
        <footer>
            CST336 Internet Programming. 2018&copy;<br>
            Results are not an actual representation of any age group or audience's interests.
            <br />
            
        </footer>
    
</body>
</html>