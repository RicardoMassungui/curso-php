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
        .foco1{
            color: green;
        }    
    </style>
    <title>Contador-Inteligente-PHP</title>
</head>
<body>
    
    <div>
    <p style="background-color: #465489;"><img src="logotipo-php.png" alt="logotipo-php"></p>
        <strong><p class="tela" >Tela de Exibição PHP</p></strong>
        
            <?php 
                $i = isset($_GET["i"]) ? $_GET["i"] : 0;
                $f = isset($_GET["f"]) ? $_GET["f"] : 0;
                $p = isset($_GET["p"]) ? $_GET["p"] : 1;
                
                while($i <= $f){
                    // contagen crescente!
                    echo "<span class='foco1'> $i </span>";                 
                     
                    $i+=$p;   
                }
                
                while($i >= $f){
                    // contagen decrescente!
                    echo "<span class='foco'> $i </span>";
                    $i-=$p;
                }
            
            
            
            ?>
           

        
    </div>
    <br>&nbsp;&nbsp;&nbsp;&nbsp;<a href="ex010.1.php" target="_self"><input type="button" value="voltar" style="background-color: #465489; color:white;"></a><br>
    <em><p style="color: white; font-size: small;">&copy; 2021 CursoemVideo-EasySoft, by Ricardo Massungui</p></em>

</body>
</html>