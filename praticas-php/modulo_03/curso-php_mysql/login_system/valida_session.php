<?php


if(!isset($_SESSION["nome_usuario"]) && !isset($_SESSION["senha_usuario"]) && !isset($_SESSION["nc"]) && !isset($_SESSION["name"])){
    
    if($_SESSION["nc"] != $_GET["nl"]){
      
        unset($_SESSION["nome_usuario"]);
        unset( $_SESSION["senha_usuario"]);
        unset($_SESSION["name"]);
        unset($_SESSION["nc"]);
        
        header("location:system_session.php");
        
        exit;
          
       }
       
   }

?>