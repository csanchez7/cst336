<?php
        
        // display album cover image
        function displayAlbum($randomValue){
                echo "<div id='albumName'>";
                switch($randomValue){
                        case 0: $album = "nas";
                                echo "<h2>Nas - Illmatic</h2>";
                                break; 
                        case 1: $album = "blackstar";
                                echo "<h2>Blackstar (Mos Def & Talib Kweli) - Blackstar</h2>";
                                break;
                        case 2: $album = "2pac";
                                echo "<h2>2Pac - All Eyez On Me</h2>";
                                break;
                        case 3: $album = "biggie";
                                echo "<h2>Notorious B.I.G. - Ready to Die</h2>";
                                break;
                        case 4: $album = "kanye";
                                echo "<h2>Kanye West - College Dropout</h2>";
                                break;
                        case 5: $album = "hill";
                                echo "<h2>Lauryn Hill - Miseducation of Lauryn Hill</h2>";
                                break;
                        case 6: $album = "jay-z";
                                echo "<h2>Jay-Z - Reasonable Doubt</h2>";
                                break;
            }
            echo "<div/>";
            echo "<br>";
            echo "<img src='img/$album.jpg' alt='$album' title='". ucfirst($album) ."' width='350' />";
        }
        
        // display spotify album
        function albumTracks($randomValue){
                echo "<div id=albumTracks>";
                $spotify = array("nas"=>"3kEtdS2pH6hKcMU9Wioob1",
                        "blackstar"=>"6GRzmk9UGL7odxprOPop1Q", 
                        "2pac"=>"4CzT5ueFBRpbILw34HQYxi", 
                        "biggie"=>"2HTbQ0RHwukKVXAlTmCZP2", 
                        "kanye"=>"3ff2p3LnR6V7m6BinwhNaQ", 
                        "hill"=>"1BZoqf8Zje5nGdwZhOjAtD", 
                        "jay-z"=>"5lheTytGmdGaGlxzXu4uDY");
                
                //
        switch ($randomValue) {
                case 0: $rapper = $spotify['nas'];
                        break;
                case 1: $rapper = $spotify['blackstar'];
                        break;
                case 2: $rapper =  $spotify['2pac'];
                        break;
                case 3: $rapper =  $spotify['biggie'];
                        break;
                case 4: $rapper =  $spotify['kanye'];
                        break;
                case 5: $rapper =  $spotify['hill'];
                        break;
                case 6: $rapper =  $spotify['jay-z'];
                        break;
                }
                echo "<iframe src='https://open.spotify.com/embed?uri=spotify:album:$rapper' width='300' height='80' frameborder='0' allowtransparency='true' allow='encrypted-media'></iframe>";
                echo "<div/>";
        }
        
        //prints text with artist's names as parameters
        function suggestedArtist($randomArtist1,$randomArtist2,$randomArtist3){
                echo "<div id='suggestions'>";
                echo 'If you liked that, check out ' .$randomArtist1. ', ' .$randomArtist2. ' or ' .$randomArtist3. '!';
                echo "</div>";
        }
        
        //random album cover function
        function randomAlbum() {
                for($i=1; $i<2; $i++){
                        $randomValue = rand(0,6);
                        displayAlbum($randomValue);
                        albumTracks($randomValue);
                }
        }
        
        //displays random related artists from array
        function randomRelatedArtists(){
                $relatedArtists = Array("Wu-Tang Clan","Dr.Dre","A Tribe Called Quest", "Outkast", "The Fugees", "Raekwon", "Eminem", "DJ Shadow", "Gang Starr", "GZA", "Mobb Deep", "Public Enemy", "Mos Def",
                "Talib Kweli", "The Roots", "Black Sheep", "Redman", "Ice Cube","De La Soul", "Big Pun",
                "MF Doom", "O.C.","Pharcyde", "Cypress Hill", "Scarface", "Pete Rock", "Kool G. Rap",
                "Masta Ace", "Eric B. & Rakim", "AZ", "Del the Funkee Homosapien","KRS ONE", "Bone Thugs-N-Harmony");

                for($i=1; $i<4; $i++){
                        ${"$random" . $i}=array_rand($relatedArtists);
                        ${"randomArtist".$i}=$relatedArtists[${"$random" . $i}];
                        if (${"randomArtist" . $i}==${"randomArtist" . $i-1} || ${"randomArtist" . $i}==${"randomArtist" . $i-2}){
                                $i-2;
                        }
                }
                suggestedArtist($randomArtist1,$randomArtist2,$randomArtist3);
        }
        
?>