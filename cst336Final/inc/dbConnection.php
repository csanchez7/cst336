<?php

function getDBConnection($dbname = 'heroku_877265a5f2e6a4b'){
    $host = 'us-cdbr-iron-east-04.cleardb.net';
    $username = 'b76856947e2501';
    $passowrd = 'db021ee6';
    
    $dbConn = new PDO("mysql:host=$host; dbname=$dbname", $username, $passowrd);
    $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    return $dbConn;
}
?>