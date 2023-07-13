<?php
// page3.php

session_start();

echo 'Bem vindo à página #3<br />';

echo $_SESSION['id']; // id
echo $_SESSION['nome']; // Ricardo
echo $_SESSION['email'];   // ricardomassungui01@gmail.com
echo date('Y m d H:i:s', $_SESSION['time']);

// Você pode querer usar o SID aqui, como fizemos em page1.php
echo '<br /><a href="sessao02.php">page 2</a>';
?>
<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session 03</title>
</head>
<body>
    
</body>
</html>