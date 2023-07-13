<?php
// page2.php

session_start();

echo 'Bem vindo à página #2<br />';
if($_SESSION['log']=="s"){

echo $_SESSION['id']=1 ."<br>"; // id
echo $_SESSION['nome']; // Ricardo
echo $_SESSION['email'];   // ricardomassungui01@gmail.com
echo date('Y m d H:i:s', $_SESSION['time']);

// Você pode querer usar o SID aqui, como fizemos em page1.php
echo '<br /><a href="sessao03.php">page 3</a>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session 02</title>
</head>
<body>
    
</body>
</html>
<?php

}else{
    echo"acesso indevido!";
}

?>