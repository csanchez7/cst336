<?php
session_start();

include 'connect.php';
$connect = getDBConnection();

$email = $_POST['email'];
$lastScore = $_POST['lastScore'];
$attempts = $_POST['attempts'];

//adding scores to database
$sql = "INSERT INTO practice (email, lastScore, attempts)
        VALUES (:email, :lastScore, :attempts)";
        
$data = array(
        ":email" => $email,
        ":lastScore" => $lastScore,
        ":attempts" => $attempts
);

$stmt = $connect->prepare($sql);
$stmt->execute($data);

// //Retrieving database info
// $sql = "SELECT 
//         FROM practice
//         WHERE email = :email";

// $stmt = $connect->prepare($sql);
// $stmt->execute(array(":email"=>email));
// $result = $stmt->fetch(PDO::FETCH_ASSOC);

// //Encoding data using JSON
// echo json_encode($result);
        
?>