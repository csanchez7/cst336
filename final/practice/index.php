<?php

session_start();

?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Practice Final</title>
    <!--<link rel="stylesheet" href="css/styles.css?v=1.0">-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>

<body>
    <div id="title">
    <script src="js/scripts.js"></script>
    <h2 id="title">Online Quiz<br></h2>
    <b id="subtitle">Do your best to answer these questions!</b>
    </div>
    <br><br>
    
    <form id="quiz-form">
        
        <!--email-->
        Email:
        <input type="text" name="email" size="30"/>

        <!--question 1-->
        <h3><u>Question 1</u></h3>
        What is 2 + 2? 
        <input type="number" name="question1" size="5"/>
        <div id="question1-feedback"></div>
        
        <!--question 2-->
        <h3><u>Question 2</u></h3>
        What is 2 + 3? 
        <input type="number" name="question2" size="5"/>
        <div id="question2-feedback"></div>
        
        <br />
        <br />
        
        <!--submit-->
        <input type="submit" value="Submit" />
        
        <!--dividor for displaying score, average score and number of attempts-->
        <div id="feedback">
        <span id="score"><strong>Score: </strong></span>/2<br>
            <br />
        <span id="prevScore"><strong>Last Attempt Score: </strong></span>
            <br />
            <br />
        <span id="times"><strong>Number of Attempts: </strong></span>
        
        </div>
        
    </form
</body>
</html>