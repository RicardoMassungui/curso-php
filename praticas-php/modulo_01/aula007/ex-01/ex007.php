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
    </style>
    <title>permissor_autoritário-PHP</title>
</head>
<body>
    <div>
    <p style="background-color: #465489;"><img src="logotipo-php.png" alt="logotipo-php"></p>
        <strong><p class="tela" >Tela de Exibição PHP</p></strong>
        <?php 
            $nome = isset($_GET["nome"]) ? $_GET["nome"] : "defaut";
            $ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;
            $idade = date("Y") - $ano;
            if($idade >= 18){
                $dirigir = "<p style='color:green;'>Apto para dirigir!</p>";
                $votar = "<p style='color:green;'>Apto para votar!</p>";
                
                    
            }elseif($idade <= 17){
                $dirigir = "<p style='color:red;'> Não apto para dirigir!</p>";
                $votar = "<p style='color:red;'>Não apto para votar!</p>";
                
            }
            
            echo "<p><strong>Nome e Idade:</strong> $nome tem $idade anos de idade!</p>";
            echo "<p><strong>Carta de condução:</strong> $dirigir</p>";
            echo "<p><strong>Direito a voto:</strong> $votar</p>";
                
        
        ?> 
        &nbsp;&nbsp;&nbsp;&nbsp;<a href="ex007.html" target="_self"><input type="button" value="voltar" style="background-color: #465489; color:white;"></a>
    </div>
    
</body>
</html>