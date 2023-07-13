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
            <form>
                <h2>&#x1f4bb;Resposta da Pesquisa</h2>
            <hr>
            
                <?php
                   
                   $nome = $_POST['nome'];
                   $estado = $_POST['estado'];
                    $sel = array(0,0,0,0);

                    echo "Nome: $nome - Estado: $estado <br>";
                    echo "Transportes Selecionados: <br>";

                    foreach($_POST['sel'] as $transp){
                           $sel[$transp-1]=1;
                           echo"$transp<br>"; 
                    }
                    echo"<hr>";
                    $cmd = "INSERT INTO tb_pesquisa VALUES (Null, '$nome', '$estado', '$sel[0]', '$sel[1]', '$sel[2]', '$sel[3]')";
                    $res = mysqli_query($con, $cmd);
                    if(mysqli_affected_rows($con) > 0){
                        echo "Pesquisa ou dados gravados com sucesso!";
                    }
                        
                 
                   mysqli_close($con); 
                ?>
            
            </form>
        </section>

</body>
</html>
