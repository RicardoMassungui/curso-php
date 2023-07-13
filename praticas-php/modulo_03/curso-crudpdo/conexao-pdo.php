<?php
try{
    $pdo = new PDO("mysql:dbname=CRUDPDO;host=127.0.0.1", "root", "");
}catch(PDOException $e){
    echo "Erro com banco de dados: ". $e->getMessage();
}
catch(Exception $e){
    echo "Erro Genérico: ". $e->getMessage();
}
?>