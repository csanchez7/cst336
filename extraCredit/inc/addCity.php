<?php
    include 'dbConnection.php';
    $conn = getDBConnection();

    $sql = "INSERT INTO citycount (city)
            VALUES ('".$_POST['city']."')";
            
    $statement = $conn->prepare($sql);
    $statement->execute();
    
    $sql="SELECT city, count(city) as times
        FROM citycount 
        GROUP by city";
        
        $statement = $conn->prepare($sql);
        $statement->execute();
        $records = $statement->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($records);
?>