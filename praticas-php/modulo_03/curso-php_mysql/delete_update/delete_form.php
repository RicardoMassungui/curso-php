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
            background-color: lightgray;
        }
        p{
            text-align: center;
            font-weight: bold;
            margin-bottom: 10px;
            color: red;
        }
        #p2{
            color: green;
        }
        section{
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="delete_form.php" method="POST" name="form_excluir">
        <table style="margin:auto;">
            <caption><h1>Tabela de Usuáros</h1></caption>
        <tr>
            <td class="td">id</td><td class="td">nome</td><td class="td">username</td><td class="td">senha</td><td class="td">email</td><td class="td">telefone</td><td class="td">status</td><td class="td">Observação</td>
        </tr>
        <?php
        require_once "conexao.php";
        
        
        // Verifica se os dados foram apagados ou não.
        if(isset($_POST['sel'])){
            //Deleta todos os dados selecionados no checkbox.
        foreach($_POST["sel"] as $codigo){
            $sql = "DELETE FROM tb_cadastro WHERE cod=$codigo";
            $res = mysqli_query($con, $sql);
        }
            printf("<p id='p2'>Dados Deletado com sucesso!\n</p>");

        }else{
            printf("<p>nenhum Dado Deletado!\n</p>");
        }
        
        $res = mysqli_query($con, "SELECT * FROM tb_cadastro ORDER BY cod");
        while($linhas = mysqli_fetch_assoc($res)){
        $cod = $linhas['cod'];
        $nome = $linhas['nome'];
        $username = $linhas['username'];
        $senha = $linhas['senha'];
        $email = $linhas['email'];
        $telefone = $linhas['telefone'];
        $st = $linhas['status'];
        $obs = $linhas['obs'];
        echo"<tr>";
        echo"<td>$cod</td><td>$nome</td><td>$username</td><td>$senha</td><td>$email</td><td>$telefone</td><td>$st</td><td>$obs</td><td align:center><input type='checkbox' value='$cod' name='sel[]'></td> ";
        echo"</tr>";
        }
        
        mysqli_close($con);
        ?>
        </table><br>
       
        <section><input type="submit" value="Excluir dados" name="bt_excluir"></section>
    </form><br>

</body>
</html>
