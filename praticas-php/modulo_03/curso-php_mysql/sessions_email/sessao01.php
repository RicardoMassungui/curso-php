<?php
// page1.php

session_start();

echo 'Bem vindo à página #1';

$_SESSION['nome'] ="Ricardo<br>";
$_SESSION['email']  = "ricardomassungui01@gmail.com<br>";
$_SESSION['time']  = time();
$_SESSION['log'] = "n";

if(isset($_SESSION['id'])){
    print("<br>". $_SESSION['id']);
}else{
    print("Variável não encontrada!");
}

// Funciona se o cookie de seção foi aceito
//echo '<br /><a href="sessao02.php">page 2</a>';

// Ou talves passando o ID da seção se necessário
echo '<br /><a href="sessao02.php?' . SID . '">page 2</a>';
echo '<br /><a href="sessao03.php?' . SID . '">page 2</a>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session 01</title>
</head>
<body>

</body>
</html>