<?php

session_start();

?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Practice Final</title>
    <link rel="stylesheet" href="css/styles.css?v=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"> </script>
</head>

<body>
    <div id="title">
    <h2 id="title">Online Quiz<br></h2>
    <b id="subtitle">Do your best to answer these questions!</b>
    </div>
    <br><br>
    <form id="quiz-form">
        <h3><u>Question 1</u></h3>
        What is 2 + 2?<br>
        <input type="number" name="question1" size="5"/>
        <div id="question1-feedback" class="response"></div>


        <br />
        <input type="submit" value="Submit" />
        
    </form>
    <script src="js/scripts2.js"></script>
</body>
</html>