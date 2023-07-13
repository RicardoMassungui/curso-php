<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //r = abre p/leitura, ponteiro no inicío;
        //r+ = abre/leitura e escrita;
        //w = abre/escrita, ponteiro no inicío, e zera, se arquivo não existir ele o cria;
        //w+ = abre/leitura e escrita;
        //a = abre p/escrita, ponteiro no final, se arquivo não existir ele o cria;
        //a+ = abre p/leitura e escrita;
        //x = abre p/leitura, ponteiro no inicío, se arquivo já existir ele gera erro do tipo Warning;

        //abre o documento para escrita com ponteiro no final.
        $arquivo = fopen("file-system/aula01/aula01.txt", "a");
        $conteudo = fwrite($arquivo,"\r\nfullstack");
       //abre o documento para leitura. 
       $arquivo = fopen("file-system/aula01/aula01.txt", "r");
       $conteudo = fread($arquivo,100);
        
        echo "$conteudo";
        fclose($arquivo);
        
    ?>
</body>
</html>
<?php



