<?php
    //estilo procedural
    
    $server = "localhost";
    $user = "root";
    $password = "";
    $dbname = "cfbcursos";
    $port = "3306";
    $con = mysqli_connect($server, $user, $password, $dbname, $port);
    if(mysqli_connect_error()){
        print("Falha na Conexão: ". mysqli_connect_error());
        exit();
    }
    //else{echo"<h2>&#x1f913; conexão realizada com sucesso! &#x1f4bb;</h2>";}*/

   


    

       
?>