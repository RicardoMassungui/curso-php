<?php
session_start();
ob_start();
setcookie("nome");
setcookie("nc");
setcookie("nome_usuario");
setcookie("senha_usuario");

$_SESSION['msg'] = "<div id='alert'>
<h4>Deslogado com Sucesso!</h4>
</div>";
header("Location:system_cookie.php");
exit;
?>