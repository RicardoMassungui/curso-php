<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logotipo-php.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <title>raiz-quadrada</title>
</head>
<body>
    <h1 style="text-align: center; color: white;">função sqrt &#x1f4bb;</h1>
    <hr>
  <p style="text-align: center;">
    <img src="logotipo-php.png" alt="logo-php-violet">
  </p>
      
    <main>
      
        <div id="tela">
        <P style="color: white;"><strong>Tela de exibição de código PHP</strong></P>
        </div>
         <div>
         <form action="ex006.php" method="get"><p>
            valor: <input type="number" name="v">
            <input type="submit" value="calcular raiz">
         </form>
        <?php
          $valor = $_GET["v"];
          $res = sqrt($valor);
          echo"valor informado: $valor";
          print("<br>raiz quadrada: $res")

          
        ?>        
        </div>
    </main>
   

    <p style="text-align:center; color: white;">&copy; <strong>EasySoft, By Ricardo Massungui.&#x1f913;</strong></p>
</body>
</html>