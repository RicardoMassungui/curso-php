<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guestbook</title>
</head>
<body>
        <?php
            $nome = $_POST["nome"];
            $msg = $_POST["msg"];
            $conteudo = $nome."\r\n".$msg."\r\n";

           $arquivo = fopen("visitas.txt", "a");
            fwrite($arquivo, $conteudo);

            echo"mensagem gravada: $conteudo";

            fclose($arquivo);
        ?>
        <hr>
        <a href="index.html" target="_self">voltar</a>
      
</body>
</html>