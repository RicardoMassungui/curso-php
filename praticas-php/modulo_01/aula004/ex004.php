<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logotipo-php.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Math_functions</title>
</head>
<body>
    <h1 style="text-align: center; color: white;">Funções Matemáticas PHP&#x1f4bb;</h1>
    <hr>
  <p style="text-align: center;">
    <img src="logotipo-php.png" alt="logo-php-violet">
  </p>
    <section>
    <div id="tela">
    <P style="color: white;"><strong>Tela de exibição de código PHP</strong></P>
    </div>
    <div>
    <h3>Funções Matemáticas</h3>
    <?php
     
    $num1 = $_GET["x"];
    $num2 = $_GET["y"];
    echo "Valor Absoluto de $num1 = " . abs($num1);
    echo "<br>Exponencial de $num1 = " . pow($num1, $num2);
    echo "<br>Raiz Quadrada de $num2 = " . sqrt($num2);
    echo "<br>Valor arredondado de $num2 = " . round($num2);
    echo "<br>Parte inteira de $num1 = " . intval($num1);
    echo "<br>O Número $num2 em moeda = " . number_format($num2, 2, "," , ".");
    
    ?>
       
    </div>
    </section>
    <p style="text-align:center; color: white;">&copy; <strong>EasySoft, By Ricardo Massungui.&#x1f913;</strong></p>
</body>
</html>