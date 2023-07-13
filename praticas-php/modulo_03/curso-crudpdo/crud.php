
<?php
//---conexão com banco de dados via PDO.-----
try{
    $pdo = new PDO("mysql:dbname=CRUDPDO;host=127.0.0.1", "root", "");
}catch(PDOException $e){
    echo "Erro com banco de dados: ". $e->getMessage();
}
catch(Exception $e){
    echo "Erro Genérico: ". $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         body{
            font-family: Arial, Helvetica, sans-serif;
        }
        table, td{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
        .td{
            text-align: center;
            background-color: lightskyblue;
            font-weight: bolder;
        }
        caption{
            background-color: lightsteelblue;
        }

    </style>
</head>
<body>
    <table style="margin:auto">
    <caption><h1>Tabela de Usuáros</h1></caption>
    <tr>
      <td class="td">Id</td><td class="td">nome</td><td class="td">telefone</td><td class="td">email</td>
        
    </tr>
<?php
//---conexão com banco de dados via PDO.-----
/*try{
    $pdo = new PDO("mysql:dbname=CRUDPDO;host=127.0.0.1", "root", "");
}catch(PDOException $e){
    echo "Erro com banco de dados: ". $e->getMessage();
}
catch(Exception $e){
    echo "Erro Genérico: ". $e->getMessage();
}*/

//------inserção de dados--------

//1º forma de inserção de dados via PDO pelo método prepare().

//$res=$pdo->prepare("INSERT INTO PESSOA (nome, telefone, email) VALUES (:n, :t, :e)");

//métodos de acesso aos parâmetros do método prepare()
/*
//a)método bindValue()
$res->bindValue(":n", "valéria");
$res->bindValue(":t", "964569340");
$res->bindValue(":e", "valeriapocas@gmail.com");
$res->execute();


//b)->método bindParam()
$nome = "Ndombaxi";
$telefone = "939483364";
$email = "sandandombaxi@backend01.co.ao";
$res->bindParam(":n", $nome);
$res->bindParam(":t", $telefone);
$res->bindParam(":e", $email);
$res->execute();


//2º forma de inserção de dados via PDO pelo método query().

$res = $pdo->query("INSERT INTO PESSOA (nome, telefone, email) VALUES ('weza', '9304450303', 'wezamualenge94@gmail.com')");*/

//---------------Deletação de dados--------------

//1º forma de deletação de dados via PDO pelo método prepare().

//$del = $pdo->prepare("DELETE FROM PESSOA WHERE id=:id");
/*
$del->bindValue(":id", "13");
$del->execute();

$id = 8;              
$del->bindParam(":id", $id);                    
$del->execute();

//2º forma de deletação de dados via PDO pelo método query().

$del = $pdo->query("DELETE FROM PESSOA WHERE id='14'");               
*/               

//----------------Edição de dados-----------
//$edit = $pdo->prepare("UPDATE PESSOA SET nome=:n, email=:e WHERE id=:id");
//1º forma de edição de dados via PDO pelo método Prepare().
/*
$edit->bindValue(":n", "Ricardo");
$edit->bindValue(":e", "<massungui01@gmail.com");
$edit->bindValue(":id", 17);
$edit->execute();
//-----------
$nome = "Pedro";
$email = "Pedro01@gmail.com";
$id = 15;
$edit->bindParam(":n", $nome);
$edit->bindParam(":e", $email);
$edit->bindParam(":id", $id);;
$edit->execute();

//2º forma de edição de dados via PDO pelo método query().

$edit = $pdo->query("UPDATE PESSOA SET nome='sebastião', email='sebastiao02@gmail.com' WHERE id='16'");*/

//-------------Seleção ou Consulta de dados--------------

//1º forma de seleção ou consulta de dados via PDO pelo método prepare().

$sel = $pdo->prepare("SELECT * FROM PESSOA");
$sel->bindValue(":id", 1);
$sel->execute();


//transforma a variavél $res em uma matriz e as exibe na tela;
$res = $sel->fetchAll(PDO::FETCH_ASSOC);
for($i=0; $i < count($res); $i++){
    echo"<tr>";
    foreach($res[$i] as $k => $v){
        echo"<td>$v</td>";
    }
    echo "</tr>";
}
/*
//transforma a variavél $res em um array associativo e as exibe na tela;
$res = $sel->fetch(PDO::FETCH_ASSOC);
foreach($res as $k => $v){
    echo"$k = $v<br/>";
}
echo count($res);
var_dump($res);
*/
/*
//imprime um array com chave númericos e personalizados com os valores.
echo "<pre>";
print_r($res);
echo "</pre>";
*/
/*
//-----------
$id = 1;
$cmd->bindParam(":id", $id);
$cmd->execute();*/

//2 forma de seleção ou consulta de dados via PDO pelo método query().

//$cmd = $pdo->query("SELECT * FROM PESSOA WHERE id='16'");

?>
</table>
</body>
</html>