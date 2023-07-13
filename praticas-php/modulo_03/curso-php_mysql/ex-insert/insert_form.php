<?php
 require_once "conexao.php";

$cod = $_POST["cod"];
$prod = $_POST["prod"];
$pre =$_POST["pre"];
$qtd =$_POST["qtd"];
$fdb = $_POST["fdb"];
$cat = $_POST["cat"];


$sql = "INSERT INTO tb_produtos VALUES ('$cod', '$prod', '$pre', '$qtd', '$fdb', '$cat')";
$res = mysqli_query($con, $sql);
$linhas = mysqli_affected_rows($con);
if($linhas == 1){
    echo "Registro gravado com sucesso!";
}else{
    echo "falha na gravação do registro!";
}


mysqli_close($con);


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resposta php</title>
</head>
<body>
    <a href="insert_form.html">voltar</a>
</body>
</html>
