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
    </style>
</head>
<body>
    <table style="margin:auto;">
        <caption><h1>Tabela de Usuáros</h1></caption>
    <tr>
        <td class="td">id</td><td class="td">nome</td><td class="td">username</td><td class="td">senha</td><td class="td">email</td><td class="td">telefone</td><td class="td">status</td><td class="td">Observação</td>
    </tr>
    <?php
require_once "conexao.php";

$res = mysqli_query($con, "SELECT * FROM tb_cadastro");
while($linhas = mysqli_fetch_assoc($res)){
    $cod = $linhas['cod'];
    $nome = $linhas['nome'];
    $username = $linhas['username'];
    $senha = $linhas['senha'];
    $email = $linhas['email'];
    $telefone = $linhas['telefone'];
    $st = $linhas['st'];
    $obs = $linhas['obs'];
    echo"<tr>";
    echo"<td>$cod</td><td>$nome</td><td>$username</td><td>$senha</td><td>$email</td><td>$telefone</td><td>$st</td><td>$obs</td>";
    echo"</tr>";
}
/*echo "encontrado $linhas registro na tabela tb_cadastro";*/
mysqli_close($con);
?>
</table>
</body>
</html>
