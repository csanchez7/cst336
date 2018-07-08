<?php

    $cartoons = array("Captain Planet","Bob's Burgers","Ninja Turtles","PowerPuff Girls",
                        "Batman TAS", "Adventure Time", "Daria","Rick and Morty", "King of the Hill",
                        "Sailer Moon", "Dragon Ball Z","The New Adventures of Batman", "G.I. Joe",
                        "Looney Tunes","The Flintstones","She-Ra");

    $campy = array("The New Adventures of Batman","Ninja Turtles","G.I. Joe",
                    "Sailer Moon","Looney Tunes","The Flintstones","She-Ra");
    $action = array("Captain Planet","Batman TAS","PowerPuff Girls","Dragon Ball Z","She-Ra");
    $comedy = array("Rick and Morty", "Daria","Bob's Burgers","Ninja Turtles",
                    "Adventure Time","King of the Hill","Looney Tunes","The Flintstones");
    $psa = array("G.I. Joe", "Captain Planet","Looney Tunes","She-Ra");
    
    $Boys = array("The New Adventures of Batman","Ninja Turtles","G.I. Joe","Looney Tunes","Batman TAS",
                    "Captain Planet","Dragon Ball Z", "Adventure Time");
    $Girls = array("Sailer Moon","Looney Tunes","PowerPuff Girls", "Daria", "Adventure Time","She-Ra");
    $Adult = array("Rick and Morty","Looney Tunes","Daria","Bob's Burgers",
    "Ninja Turtles","Adventure Time","King of the Hill","Dragon Ball Z");
    
    $young = array("Captain Planet","Ninja Turtles","PowerPuff Girls",
                        "Batman TAS", "Adventure Time", "Daria","Sailer Moon", 
                        "Dragon Ball Z","The New Adventures of Batman", "G.I. Joe");
    $middle = array("Bob's Burgers","Batman TAS","Adventure Time", "Daria","Rick and Morty", "King of the Hill",
                        "Sailer Moon", "Dragon Ball Z","The New Adventures of Batman", "G.I. Joe",
                        "Looney Tunes","The Flintstones","She-Ra");
    $old = array("Looney Tunes","King of the Hill","She-Ra","The Flintstones", "G.I. Joe","The New Adventures of Batman");
    
    function randomFromMatches($ar1,$ar2,$ar3,$ar4){
        $matches = array_intersect($ar1,$ar2,$ar3);
        $random = array_rand($matches);
        return $random;
    }
    
    function mergeGenres($genres){
        switch (count($genres)) {
                case 1: $genres=$ar1;
                        break;
                case 2: $genres=array_merge($ar1,$ar2);
                        break;
                case 3: $genres=array_merge($ar1,$ar2,$ar3);
                        break;
                case 4: $genres=array_merge($ar1,$ar2,$ar3,$ar4);
                        break;
                }
                return $genres;
    }
    
    
    
    
?>