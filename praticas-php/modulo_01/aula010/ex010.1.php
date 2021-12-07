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
    <title>Contador-Inteligente-PHP</title>
</head>
<body>
    
    <div>
    <p style="background-color: #465489;"><img src="logotipo-php.png" alt="logotipo-php"></p>
        <strong><p class="tela" >Tela de Exibição PHP</p></strong>
        <form method="GET" action="ex010-2.1.php">
            <?php 
                echo '<strong>Inicio:</strong> <input type="number" name="i"><br>
                    <br><strong>Fim:</strong> <input type="number" name="f"><br>
                    <br><strong>Pulos:</strong> <select name="p">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    </select>   ';  
                    
                    
                
                
                
                
            ?>
            <br><br><input type="submit" value="contar" style="background: #777bb3; color:white;">
        </form>
        <!--&nbsp;&nbsp;&nbsp;&nbsp;<a href="ex008.html" target="_self"><input type="button" value="voltar" style="background-color: #465489; color:white;"></a>-->
    </div>
    <em><p style="color: white; font-size: small;">&copy; 2021 CursoemVideo-EasySoft, by Ricardo Massungui</p></em>
</body>
</html>