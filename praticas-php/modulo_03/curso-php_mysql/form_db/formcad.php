<?php
    include "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro de produtos</title>
    <style>

        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: rgba(211, 211, 211, 0.85);    
        }
        section{
            max-width: 320px;
            min-width: 128px;
            background-color: white;
            font-weight: bold;
            padding: 15px;
            margin: auto;
            box-shadow: 1px 1px 3px black;
            border-radius: 10px;
        }
        h1, h2{
            text-align: center;
        }

    </style>
</head>
<body>

        <section>
            <form action="answer.php" method="post" name="f_cad" id="fcad">
                <h2>&#x1f4bb;Pesquisa dinámica</h2>
            <hr>
                <label for="Nome">Nome: </label>
            <input type="text" name="nome" size="20" maxlength="30"><br><br>
            <label for="estado">Selecione o seu estado: </label><br><br>
            <select name="estado" id="">
                <?php
                    $sql = "SELECT * FROM tb_uf ORDER BY uf ASC";
                    $res = mysqli_query($con, $sql);
                    while($vet = mysqli_fetch_assoc($res)){
                        $uf = $vet['uf'];
                        $sigla = $vet['sigla'];
                        echo"<option value='$sigla'>$uf</option>";
                    }
                    
                ?>
            </select>
            <br><br>
            <label for="transporte">Selecione os seus transportes favoritos</label><br><br>
            <?php
                    $sql = "SELECT * FROM tb_transportes ORDER BY cod";
                    $ans = mysqli_query($con, $sql);
                    while($vet = mysqli_fetch_assoc($ans)){
                        $cod = $vet['cod'];
                        $transp = $vet['transportes'];
                        echo"<input type=checkbox name=sel[] value=$cod>$transp<br>";
                    }
                     
                   mysqli_free_result($res);
                    mysqli_close($con);
                ?>
            
            <br>
            <hr>
            <input type="submit" value=" gravar pesquisa ">
            <input type="reset" value=" Limpar ">
            </form>
        </section>

</body>
</html>