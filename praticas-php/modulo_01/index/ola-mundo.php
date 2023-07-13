<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olá, Mundo!</title>
</head>
<body>
    <H1>Mensagem php</H1>
    <form method="GET" action="ola-mundo.php">
    <input type="file" name="arquivos" id="">
    <input type="submit" value="+ carregar">
    </form>
    <?php
       
       $arq = isset($_GET['arquivos'])?$_GET['arquivos']:false;
       echo"<div style='width: 500px; height: 300px; border: 1px solid black;'>$arq</div>";
    ?>
</body>
</html>