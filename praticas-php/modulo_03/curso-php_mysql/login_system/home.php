
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
       echo"seja bem-vindo ". $_COOKIE['nome'];
       $_SESSION['msg'] = "<div id='alert'>
       <h4>Logado com Sucesso!</h4>
   </div>";
    ?>
    <a href="logout_cookie.php">sair</a>
</body>
</html>