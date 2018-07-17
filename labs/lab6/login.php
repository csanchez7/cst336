<?php
    session_start();
?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>OtterMart - Admin Site</title>
  <link rel="stylesheet" href="css/styles.css?v=1.0">

</head>

<body>
    <script src="js/scripts.js"></script>
    <h1>OtterMart - Admin Site</h1>
  
    <form method="POST" action="loginProcess.php">
        Username: <input type="text" name="username"/> <br/>
        Password: <input type="password" name="password"/> <br/>
        
        <input type="submit" name="submitForm" value="Login!" />
    <br /><br />
    <?php
        if($_SESSION['incorrect']){
            echo "<p class='lead' id = 'error' style='color:red'>";
            echo "<strong>Incorrect Username or Password!</strong></p>";
        }
    ?>
    </form>
  
  
</body>
</html>



