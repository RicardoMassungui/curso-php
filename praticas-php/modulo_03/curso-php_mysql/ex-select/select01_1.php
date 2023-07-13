<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
        }
        table, td{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
        .td{
            text-align: center;
            background-color: lightskyblue;
            font-weight: bolder;
        }
        caption{
            background-color: greenyellow;
        }
        section{
            text-align: center;
        }
    </style>
</head>
<body>
    <table style="margin:auto;">
        <caption><h1>Tabela de Produtos</h1></caption>
    <tr>
        <td class="td">Código</td><td class="td">Produto</td><td class="td">Preço</td><td class="td">Quantidade</td><td class="td">FeedBack</td><td class="td">Categoria</td>
    </tr>
    <?php
require_once "conexao.php";
$cat1 = $_POST["cat1"];
$cat2 = $_POST["cat2"];
$cat3 = $_POST["cat3"];
$res = mysqli_query($con, "SELECT * FROM tb_produtos where cat=$cat1 or cat=$cat2 or cat=$cat3");
while($linhas = mysqli_fetch_row($res)){
    $cod = $linhas[0];
    $prod = $linhas[1];
    $prec = $linhas[2];
    $qtd = $linhas[3];
    $fdb = $linhas[4];
    $cat = $linhas[5];
    
    
    echo"<tr>";
    echo"<td>$cod</td><td>$prod</td><td>$prec</td><td>$qtd</td><td>$fdb</td><td>$cat</td>";
    echo"</tr>";
}

/*echo "encontrado $linhas registro na tabela tb_cadastro";*/
mysqli_close($con);
?>
</table><br><br>
<?php
  echo'<section><a href="select01_1form.html"><button>voltar</button></a></section>';
?>
</body>
</html>
