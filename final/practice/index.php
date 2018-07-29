<!doctype html>

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
    <form id="form" method="get">
        
        <div id="question1">
            <h3><u>Question 1</u></h3>
            <text>What is 2 + 2?</text><br>
            <input value="" type="number" name="answer1">
        </div>
        <br>
        
        <div id="question2">
            <h3><u>Question 2</u></h3>
            <text>What is 2 + 3?</text><br>
            <input value="" type="number" name="answer2">
        </div>
        <br><br>
        
        <div id="email">
            <b>Please enter your email</b>
            <br>
            <input value="" type="text" name="name" placeHolder="email@address.com">
            <br>
        </div>
        <br>

        <input id="submit" type="submit" value="Submit Form"/>
        
    </form>
    <script src="js/scripts.js"></script>
</body>
</html>