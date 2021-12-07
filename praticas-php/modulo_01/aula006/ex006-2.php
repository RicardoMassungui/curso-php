<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logotipo-php.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <title>html-php</title>
</head>
<body>
    <h1 style="text-align: center; color: white;">conexão html-php &#x1f4bb;</h1>
    <hr>
  <p style="text-align: center;">
    <img src="logotipo-php.png" alt="logo-php-violet">
  </p>
      
    <main>
      
        <div id="tela">
        <P style="color: white;"><strong>Tela de exibição de código PHP</strong></P>
        </div>
        <form  method="get" action="ex006-2.php">
         <p>Nome: <input type="text" name="nome"></p>
                <p>Ano de nascimento: <input type="number" name="ano"></p>      
                <fieldset><legend>Sexo</legend>
                <input type="radio" name="sexo" id="mas" checked value="homem">
                <label for="mas">Masculino</label><br>
                <input type="radio" name="sexo" id="fem" value="mulher">
                <label for="fem">feminino</label>
                </fieldset><br>
                
                <input type="submit" value="Enviar">
         </form>

        <div>
          <?php
              $nome = $_GET["nome"];
              $ano = $_GET["ano"];
              $sexo = $_GET["sexo"];
              $idade = date("Y")-$ano;
              print("<p>
               $nome é $sexo e tem $idade anos de idade!
             </p>"); 
              
           
          
          ?> 
        </div>
    </main>
   

    <p style="text-align:center; color: white;">&copy; <strong>EasySoft, By Ricardo Massungui.&#x1f913;</strong></p>
</body>
</html>