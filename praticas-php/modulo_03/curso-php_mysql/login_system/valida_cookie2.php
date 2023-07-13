<?php
if(!empty(!isset($_COOKIE["nome_usuario"]) && !isset($_COOKIE["senha_usuario"]) && !isset($_COOKIE["nc"]))){
    setcookie("nc");
    setcookie("nome_usuario");
    setcookie("senha_usuario");
  header("location:auth_system.php");
}else{

   $ck = $_COOKIE["nc"];
   $cks = $_GET["nl"];

    if($ck != $cks){
      setcookie("nc");
      setcookie("nome_usuario");
      setcookie("senha_usuario");
      header("location:auth_system.php");
    }

}