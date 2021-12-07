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
                
                $i = 1;
                while($i <= 5){
                    $v = "num". $i;
                    $url = "v". $i;
                    $$v = isset($_GET[$url]) ? $_GET[$url] : 0;
                                     
                    $i ++;
                }
                
                $i = 1;
                while($i <= 5){
                    $v = "num". $i;
                    echo "valor $i º = " . $$v. "<br>";
                    $i++;
                }
            
            
            
            ?>
           

        <br>&nbsp;&nbsp;&nbsp;&nbsp;<a href="ex010.php" target="_self"><input type="button" value="voltar" style="background-color: #465489; color:white;"></a>
    </div>
    <em><p style="color: white; font-size: small;">&copy; 2021 CursoemVideo-EasySoft, by Ricardo Massungui</p></em>
</body>
</html>