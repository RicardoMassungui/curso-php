<?php
 require_once "conexao.php";
$cript="Ricardo";
$pw_hash = password_hash($cript, PASSWORD_BCRYPT);
$nome = "Ricardo";
$user = "Ricardo01";
$senha = $pw_hash;
$email = "ricardomassungui01@gmail.com";
$tel = "948738343";
$st = 1;
$obs = "Tudo feito!";


$sql = "INSERT INTO tb_cadastro VALUES (NULL, '$nome', '$user', '$senha', '$email', '$tel', '$st', '$obs')";
$res = mysqli_query($con, $sql);
$linhas = mysqli_affected_rows($con);
if($linhas = mysqli_affected_rows($con)){
    echo "$linhas registro inserido!";
}else{
    echo"nenhum registro inserido!";
}


mysqli_close($con);
  

?>