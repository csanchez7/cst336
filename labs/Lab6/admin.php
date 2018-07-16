<?php
    session_start();
    
    if(!isset($_SESSION['adminName'])) {
        header("Location:login.php");
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>

    </body>
</html>