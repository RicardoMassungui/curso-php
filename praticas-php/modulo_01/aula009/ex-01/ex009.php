<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link rel="shortcut icon" href="imagens/logotipo-php.png" type="image/x-icon">
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
    <title>Dias da semana-PHP</title>
</head>
<body>
    
    <div>
    <p style="background-color: #465489;"><img src="imagens/logotipo-php.png" alt="logotipo-php"></p>
        <strong><p class="tela" >Tela de Exibição PHP</p></strong>
        <?php 
            $ds = isset($_GET["ds"]) ? $_GET["ds"] : 0;
            switch($ds){
                case 2:
                    $ds = '<p style=color:#465489;>" Estudar PHP "</p><img src="imagens/logotipo-php-100.png" alt="php">';
                    break;
                case 3:
                    $ds = '<p style=color:#e44d26;>" Estudar HTML5 & CSS3 </p><img src="imagens/logotipo-html5-css3-100.png" alt="php">';
                        
                    break;       
                case 4:
                    $ds = '<p style=color:#ba9b1b;>" Estudar JAVASCRIPT "</p><img src="imagens/logotipo-javascript-100.png" alt="php">';
                    break;    
                case 5:
                    $ds = '<p style=color:#7572aa;>" Estudar Banco de Dados (SQL-MYSQL) "</p><img src="imagens/logotipo-sql-100.png" alt="php">';
                    break;
                case 6:
                    $ds = '<p style=color:#a53b11;>" Estudar JAVA "</p><img src="imagens/logotipo-java.png" alt="php">';
                    break;
                case 7:
                    $ds = '<p style=color:#00ff00;>" Descansar! ""</p><img src="imagens/sabado.png" alt="php">';
                    break;
                case 8:
                    $ds = '<p style=color:#00ff00;>" Descansar! "</p><img src="imagens/domingo.png" alt="php">';
                    break;    
                default:
                    $ds = "<p style='color:red;'>Dia de semana inválido!</p>";
                         
            }
            
            echo "
                <strong>Função do dia:</strong> <span class='foco'> $ds </span>";
            
            ?> 
        
    </div>
    &nbsp;&nbsp;&nbsp;&nbsp;<a href="ex009.html" target="_self"><input type="button" value="voltar" style="background-color: #465489; color:white;"></a>
</body>
</html>        
            
                
                    
            
                
            
            
                
        
