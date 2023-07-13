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
        include "valida_cookie.php";
        echo"<h1></h1>seja bem-vindo ".$_COOKIE['nome']." Cookie </h1> ";
       
    ?>
    <a href="logout.php">sair</a>
</body>
</html>