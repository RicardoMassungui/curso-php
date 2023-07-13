<?php
session_start();
ob_start();
if(!isset($_COOKIE["nome_usuario"]) && !isset($_COOKIE["senha_usuario"]) && !isset($_COOKIE["nc"]) && !isset($_COOKIE["nome"])){
    
  if($_COOKIE["nc"] != $_GET["nl"]){
      setcookie("nome");
      setcookie("nc");
      setcookie("nome_usuario");
      setcookie("senha_usuario");

      $_SESSION['msg'] = "<div id='alert'>
      <h4>Necessário Realizar o login!</h4>
  </div>";
      header("location:system_cookie.php"); 
      exit;
    }
     
 
  }
     
    
     
     
 
?>