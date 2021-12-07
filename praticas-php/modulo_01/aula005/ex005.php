<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logotipo-php.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Operadores de Atribuição</title>
</head>
<body>
    <h1 style="text-align: center; color: white;">Operadores de Atribuição em PHP &#x1f4bb;</h1>
    <hr>
  <p style="text-align: center;">
    <img src="logotipo-php.png" alt="logo-php-violet">
  </p>
    <section>
    <div id="tela">
    <P style="color: white;"><strong>Tela de exibição de código PHP</strong></P>
    </div>
    <div>
    <h3>Porcentagem</h3>
    <?php
      //$p2 = 3000000;
      //$p = 3000000;
     $p = $_GET["v"];
     $p2 = $_GET["v2"];
     echo "Preço do produto Kz: " . number_format($p, 2, "," , ".");
      $p+=$p*14/100;
      $p2-=$p2*14/100;
      echo "<br>14% de aumento: " . number_format($p, 2, "," , ".");
      echo "<br>14% de desconto: " . number_format($p2, 2, "," , ".");
            
      echo "<h3>Ano-atual/passado</h3>";
  
    $aa = $_GET["ano"];
    echo "Ano_atual: $aa";
    echo "<br>Ano_passado: " . --$aa;
  
    echo "<h3>Número-antecessor/sucessor</h3>";
    
    $num = $_GET["n"];
    echo "Antecessor: $num";
    echo "<br>Sucessor: " . ++$num;
    
    echo "<h3>Variáveis referenciadas</h3>";

    $a = 2;
    $b = 3;
    $a = &$b;
    $b += 5;
    echo "valor de: $a";
    echo "<br>valor de: $b";

    echo "<h3>Variáveis de variáveis</h3>";

    $nome = "Ricardo";
    $$nome = "programador";
    echo "Conteúdo da variável: $nome";
    echo "<br>Conteúdo da variante: $Ricardo";
    
    echo"<h3>Operador ternário</h3>";
    
    $n1=$_GET["nt1"];
    $n2=$_GET["nt2"];
    
    $media = $n1+$n2;
    $media = ($media<5)?"Aluno reprovado!":"Aluno aprovado!";
    echo"1º nota: $n1<br>";
    echo"2ª nota: $n2<br>";
    echo"media: $media";
    
    echo"<h4>ex_01</h4>";
    
    $vl1 = 2.5;
    $vl2 = 5;
    $op = "a";
    $ask = ($op=="a")?$vl1+$vl2:$vl1-$vl2;
    echo"<br>resultado: $ask";

    echo"<h4>ex_02</h4>";

    $v1 = 5;
    $v2 = 8;
    $res = ($v1===$v2)?"Sim":"Não";
    echo"Resultado: $res";

    echo"<h4>ex_03</h4>";

    $ns = 1999;
    $idade = 2021-$ns;
    $res1 = ($idade>=18 && $idade<65)?"voto obrigatório!":"voto não obrigatório!";
    echo"Resultado: $res1";   



    
    ?>

    </div>
    </section>
    <p style="text-align:center; color: white;">&copy; <strong>EasySoft, By Ricardo Massungui.&#x1f913;</strong></p>
</body>
</html>