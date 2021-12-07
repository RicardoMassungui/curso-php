<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link rel="shortcut icon" href="logotipo-php.png" type="image/x-icon">
    <style>
        body{
            background-color: #777bb3;
        }
        p.tela{
            background-color: #777bb3; 
            color: white; 
            font-family: Arial, Helvetica, sans-serif;
            padding: 10px;
        }
        .foco{
            color: red;
        }    
    </style>
    <title>EasySoftCursomeVideo</title>
</head>
<body>
    
    <div>
    <p style="background-color: #465489;"><img src="logotipo-php.png" alt="logotipo-php"></p>
        <strong><p class="tela" >Tela de Exibição PHP</p></strong>
        <?php 
            $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[nome não informado!]";
            $ano = isset($_GET["ano"]) ? $_GET["ano"] : "[ano não informado!]";
            $idade = date("Y") - $ano;
            
            
            
                
        
        ?> 
        &nbsp;&nbsp;&nbsp;&nbsp;<a href="ex008.html" target="_self"><input type="button" value="voltar" style="background-color: #465489; color:white;"></a>
    </div>
    
</body>
</html>