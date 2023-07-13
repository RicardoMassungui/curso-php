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
                   $senha = password_hash($_POST['senha'], PASSWORD_BCRYPT); 
                   $sexo = $_POST['sexo'];
                   $esportes = $_POST['esportes'];
                   $coment = $_POST['feedback'];
                   // transportes
                   if(isset($_POST['carro'])){
                        $carro = $_POST['carro'];
                        //ou $carro = 1
                   }else{
                        $carro = 0;
                   }
                   //m
                   if(isset($_POST['moto'])){
                    $moto = $_POST['moto'];
                    //ou $moto = 1
                   }else{
                    $moto = 0;
                   }
                   //o
                   if(isset($_POST['onibus'])){
                    $onibus = $_POST['onibus'];
                    //ou $carro = 1
                    }else{
                    $onibus = 0;
                    }

                    $cmd = "INSERT INTO tb_favoritos VALUES (Null, '$nome', '$senha', '$sexo', '$esportes', '$carro', '$moto', '$onibus', '$coment')";
                     $res = mysqli_query($con, $cmd);
                     if(mysqli_affected_rows($con)){
                        echo "Dados Registrados com sucesso!";
                    }else{
                        echo "Falha no Registro com sucesso!";
                    }
                    echo"<br>";
                    echo "<a href=formcad2.php>Voltar</a>";
                   mysqli_close($con); 
                ?>

                
            </form>
        </section>

</body>
</html>
