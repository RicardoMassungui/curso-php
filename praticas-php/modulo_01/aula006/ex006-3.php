<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
          $text = $_GET["t"];
          $tamanho = $_GET["tam"];
          $cor = $_GET["cor"];
        ?>        
    <link rel="shortcut icon" href="logotipo-php.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <style>
      span.texto{
        font-size:<?php echo $tamanho;?> ;
        color:<?php echo $cor;?> ;
      }
    </style>
    <title>estilos em css com php</title>
</head>
<body>
    <h1 style="text-align: center; color: white;">estilos de letras em php &#x1f4bb;</h1>
    <hr>
  <p style="text-align: center;">
    <img src="logotipo-php.png" alt="logo-php-violet">
  </p>
      
    <main>
      
        <div id="tela">
        <P style="color: white;"><strong>Tela de exibição de código PHP</strong></P>
        </div>
         <div>
         <form action="ex006-3.php" method="get">
          <p>
            <label for="itxt">Texto: </label>
            <input type="text" name="t" id="itxt">
          </p>
          <label for="itam">Tamanho: </label>
          <select name="tam" id="itam">
            <option value="8pt">8</option>
            <option value="10pt">10</option>
            <option value="14pt" selected>14</option>
             <option value="20pt">20</option>
              <option value="40pt">40</option>
          </select><br>
          <p><label for="icor">Cor: </label>
          <input type="color" name="cor" id="icor">
          </p>
          <input type="submit" value="Gerar">
         </form>
        <?php
          echo "<p><span class='texto'>$text</span></p>" ;
        ?>        
        </div>
    </main>
   

    <p style="text-align:center; color: white;">&copy; <strong>EasySoft, By Ricardo Massungui.&#x1f913;</strong></p>
</body>
</html>