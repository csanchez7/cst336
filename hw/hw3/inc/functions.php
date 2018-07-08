<?php
    
    $cartoons = array("Captain Planet","Bob's Burgers","Ninja Turtles","PowerPuff Girls",
                        "Batman TAS", "Adventure Time", "Daria","Rick and Morty", "King of the Hill",
                        "Sailer Moon", "Dragon Ball Z","The New Adventures of Batman", "G.I. Joe",
                        "Looney Tunes","The Flintstones","She-Ra");    
    
    function imageDisplay($cartoonName){
        if ($cartoonName=="Captain Planet"){
            $title="captainPlanet";
        }else if($cartoonName=="Bob's Burgers"){
            $title="bobsBurgers";
        }else if($cartoonName=="Ninja Turtles"){
            $title="ninjaTurtles";
        }else if($cartoonName=="PowerPuff Girls"){
            $title="powerPuffGirls";
        }else if($cartoonName=="Batman TAS"){
            $title="batmanTAS";
        }else if($cartoonName=="Adventure Time"){
            $title="adventureTime";
        }else if($cartoonName=="Daria"){
            $title="daria";
        }else if($cartoonName=="Rick and Morty"){
            $title="rickAndMorty";
        }else if($cartoonName=="King of the Hill"){
            $title="kingOfTheHill";
        }else if($cartoonName=="Sailer Moon"){
            $title="sailerMoon";
        }else if($cartoonName=="Dragon Ball Z"){
            $title="dragonBallZ";
        }else if($cartoonName=="The New Adventures of Batman"){
            $title="theNewAdventuresOfBatman";
        }else if($cartoonName=="G.I. Joe"){
            $title="gIJoe";
        }else if($cartoonName=="Looney Tunes"){
            $title="looneyTunes";
        }else if($cartoonName=="The Flintstones"){
            $title="theFlintstones";
        }else if($cartoonName=="She-Ra"){
            $title="sheRa";
        }
        echo "<img src='img/$title.jpg' alt='$title' width='350'/>";
    }
    function randomFromMatches($ar1,$ar2,$ar3){
        $matches = array_intersect($ar1,$ar2,$ar3);
        $matches = array_unique($matches);
        $random = array_rand($matches);
        return $matches[$random];
    }
    
    function checkAgeRange($input){
        $young = array("Captain Planet","Ninja Turtles","PowerPuff Girls",
                        "Batman TAS", "Adventure Time", "Daria","Sailer Moon", 
                        "Dragon Ball Z","The New Adventures of Batman", "G.I. Joe");
        $middle = array("Bob's Burgers","Batman TAS","Adventure Time", "Daria",
                        "Rick and Morty", "King of the Hill", "Sailer Moon", 
                        "Dragon Ball Z","The New Adventures of Batman", "G.I. Joe",
                        "Looney Tunes","The Flintstones","She-Ra");
        $old = array("Looney Tunes","King of the Hill","She-Ra","The Flintstones", 
                        "G.I. Joe","The New Adventures of Batman");
        
        if ($input=="young"){
            return $young;
        }else if($input=="middle"){
            return $middle;
        }else if($input=="old"){
            return $old;
        }
    }
    
    function checkAudience($input){
        $boys = array("The New Adventures of Batman","Ninja Turtles","G.I. Joe","Looney Tunes","Batman TAS",
                    "Captain Planet","Dragon Ball Z", "Adventure Time");
        $girls = array("Sailer Moon","Looney Tunes","PowerPuff Girls", 
                    "Daria", "Adventure Time","She-Ra");
        $adults = array("Rick and Morty","Looney Tunes","Daria",
                        "Bob's Burgers","Ninja Turtles","Adventure Time",
                        "King of the Hill","Dragon Ball Z");
        
        if ($input=="boys"){
            return $boys;
        }else if($input=="girls"){
            return $girls;
        }else if($input=="adults"){
            return $adults;
        }
    }
    
    function checkGenre($array){
        
        $campy = array("The New Adventures of Batman","Ninja Turtles",
                    "G.I. Joe","Sailer Moon","Looney Tunes","The Flintstones",
                    "She-Ra");
        $action = array("Captain Planet","Batman TAS","PowerPuff Girls",
                        "Dragon Ball Z","She-Ra");
        $comedy = array("Rick and Morty", "Daria","Bob's Burgers","Ninja Turtles",
                    "Adventure Time","King of the Hill","Looney Tunes",
                    "The Flintstones");
        $psa = array("G.I. Joe", "Captain Planet","Looney Tunes","She-Ra");
        
        
        if(in_array("Action", $array)&&in_array("Comedy", $array)&&in_array("Campy", $array)&&in_array("PSA", $array)){
            $genre = array_merge($action,$comedy,$campy,$psa);
        }else if(count($array)==3&&!in_array("Action", $array)){
            $genre = array_merge($psa,$comedy,$campy);
        }else if((count($array)==3)&&(!in_array("PSA", $array))){
            $genre = array_merge($action,$comedy,$campy);
        }else if((count($array)==3)&&(!in_array("Comedy", $array))){
            $genre = array_merge($action,$psa,$campy);
        }else if((count($array)==3)&&(!in_array("Campy", $array))){
            $genre = array_merge($action,$psa,$comedy);
        }else if(in_array("Campy", $array)&&in_array("Action", $array)){
            $genre = array_merge($campy,$action);
        }else if(in_array("Comedy", $array)&&in_array("Action", $array)){
            $genre = array_merge($comedy,$action);
        }else if(in_array("PSA", $array)&&in_array("Action", $array)){
            $genre = array_merge($psa,$action);
        }else if(in_array("PSA", $array)&&in_array("Action", $array)){
            $genre = array_merge($psa,$action);
        }else if(in_array("Campy", $array)&&in_array("Comedy", $array)){
            $genre = array_merge($campy,$comedy);
        }else if(in_array("Campy", $array)&&in_array("PSA", $array)){
            $genre = array_merge($campy,$psa);
        }else if(in_array("Comedy", $array)&&in_array("PSA", $array)){
            $genre = array_merge($psa,$comedy);
        }else if((count($array)==1)&&(in_array("Action", $array))){
            $genre = $action;
        }else if((count($array)==1)&&(in_array("Comedy", $array))){
            $genre = $comedy;
        }else if((count($array)==1)&&(in_array("PSA", $array))){
            $genre = $psa;
        }else if((count($array)==1)&&(in_array("Campy", $array))){
            $genre = $campy;
        }
        $genre = array_unique($genre);
        return $genre;
    }
    
    
    
    
?>