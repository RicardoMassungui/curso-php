<?php
session_start();
session_destroy();
$_SESSION=array();
unset($_SESSION["nome_usuario"]);
unset( $_SESSION["senha_usuario"]);
unset($_SESSION["name"]);
unset($_SESSION["nc"]);
header("Location:system_session.php");
exit();
?>