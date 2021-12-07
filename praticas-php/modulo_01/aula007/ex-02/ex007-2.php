<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
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
    <title>note_calculator-PHP</title>
</head>
<body>
    
   <div>
        <p style="background-color: #465489;"><img src="logotipo-php.png" alt="logotipo-html5-red"></p>
        <strong><p class="tela" >Tela de Exibição PHP</p></strong>
        <?php 
        
          $nome = $_GET["nome"];
          $nota1 = $_GET["nota1"];
          $nota2 = $_GET["nota2"];
          $media = ($nota1+$nota2)/2;
         
          if($media >= 14 && $media <=20){
                $resultado = "<p style='color: green;'>Aluno Aprovado!</p>";
            }elseif($media >= 10 && $media <=13){
                $resultado = "<p style='color: orange;'>Aluno em Recuperação!</p>";
            }elseif($media <= 9){
                 $resultado = "<p style='color: red;'>Aluno Reprovado!</p>";
            }
            echo "<p><strong>Nome do aluno(a):</strong> $nome</p>";
            echo "<p><strong>Média:</strong> $media</p>";
            echo "<p><strong>Resultado:</strong> $resultado</p>";
          
           
        ?> 
        &nbsp;&nbsp;&nbsp;&nbsp;<a href="ex007-2.html" target="_self"><input type="button" value="voltar" style="background-color: #465489; color:white;"></a>
    </div>
    <em><p style="color: white; font-size: small;">&copy; 2021 by Ricardo Massungui</p></em>
    
</body>
</html>