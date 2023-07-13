<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "conexao.php";
        $cript="1995rosa";
        $pw_hash = password_hash($cript, PASSWORD_BCRYPT);
        $nome = "rosa";
        $user = "rosa01";
        $senha = $pw_hash;
        $email = "rosa01@gmail.com";
        $tel = "930823455";
        $st = 1;
        $obs = "Tudo ok!";

        $sql = "UPDATE tb_cadastro SET nome='$nome', username='$user',  email='$email' WHERE id = '19'";
        if($cmd = mysqli_query($con,$sql)){
            echo"registro atualizado com sucesso!";
        }else{
            echo"falha na atualizão do registro!";
        }



    
    ?>
</body>
</html>