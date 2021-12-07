<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logotipo-php.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Operadores PHP</title>
</head>
<body>
    <h1 style="text-align: center; color: white;">Operadores Aritméticos &#x1f4bb;</h1>
    <hr>
  <p style="text-align: center;">
    <img src="logotipo-php.png" alt="logo-php-violet">
  </p>
    
    <div id="tela">
    <P style="color: white;"><strong>Tela de exibição de código PHP</strong></P>
    </div>
    <div>
    <h3>Operadores Aritméticos em PHP</h3>
    <?php
    
    $n = $_GET["a"];
    $n2 = $_GET["b"];
    $adi = $n+$n2;
    $sub = $n-$n2;
    $mul = $n*$n2;
    $div = $n/$n2;
    $exp = $n^$n2;
    $mod = $n%$n2;
    echo "<strong>$n + $n2 = $adi<br></strong>";
    echo "<strong>$n - $n2 = $sub<br></strong>";
    echo "<strong>$n * $n2 = $mul<br></strong>";
    echo "<strong>$n / $n2 = $div<br></strong>";
    echo "<strong>$n % $n2 = $mod</strong>";
    
   ?>        
  </div>   
 <p style="text-align:center; color: white;">&copy; <strong>EasySoft, By Ricardo Massungui.&#x1f913;</strong></p>
</body>
</html>