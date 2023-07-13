<?php
session_start();
ob_start();  
include "valida_session.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>auth-system</title>
</head>
<body>

    <?php
      
       echo"<h1>seja bem-vindo ". $_SESSION['name']. " Session</h1>"
        
    ?>
    <a href="logout2.php">sair</a>
</body>
</html>