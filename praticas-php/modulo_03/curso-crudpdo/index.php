<?php
session_start();
ob_start();
require_once 'contador.php';
require_once 'ClassPessoa.php';
$p = new Pessoa();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrapcss/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro&#x1f468; &#x1f469;Usuários</title>
</head>

<body>
    <!--Exclui os dados dos usuário no banco de dados__UPDATE-->
    <?php
    if (isset($_GET["id_ex"])) {
        $id_p = addslashes($_GET["id_ex"]);
        $p->ExcluirPessoa($id_p);
    }
    ?>
    <!--cadastra dados no banco de dados__SELECT-->
    <?php
    if (isset($_POST["nome"])) { //se o usuário começar a cadastrar ou se clicou no botão atualizar ou cadastrar!

        //-----------se sim atualizar=botão-------
        if (isset($_GET['id_up']) && !empty($_GET['id_up'])) {
            $id_up = addslashes($_GET["id_up"]);
            $nome = addslashes($_POST["nome"]);
            $telefone = addslashes($_POST["telefone"]);
            $email = addslashes($_POST["email"]);

            //verifica se existe dados nos campos!
            if (!empty($nome) && !empty($telefone) && !empty($email)) {
                // editar ou alterar os dados
                $p->EditarAtualizarDados($id_up, $nome, $telefone, $email);
                header("location:index.php");
            }
        } else {
            //senão cadastrar=botão
            $nome = addslashes($_POST["nome"]);
            $telefone = addslashes($_POST["telefone"]);
            $email = addslashes($_POST["email"]);

            //verifica se existe dados nos campos!
            if (!empty($nome) && !empty($telefone) && !empty($email)) {

                //verifica o se email ou telefone já existe ou não!
                if (!$p->cadastrarPessoa($nome, $telefone, $email)) {
    ?>
                    <div class="aviso">
                        <h4 id="alert_e">&#x26A0;: &#x2709; Nome, Email ou &#x260e; Telefone já cadastrados! &#x26A0;</h4>
                    </div>
                <?php

                } else {
                ?>
                    <div class="aviso">
                        <h4 id='alert_s'>&#x2714; Registro cadastrado com sucesso!</h4>
                    </div>
                <?php

                }
            } else { //se não existe dados nos campos exibe a mensagem de aviso!
                ?>
                <div class="aviso">
                    <h4 id='alert_e'>
                        &#x2716; Necessário Preenchar todos os campos! &#x26A0;</h4>
                </div>
    <?php
            }
        }
    }
    ?>
    <!---Preenche dados no formulário de cadastro para editar os dados vindo da base de dados__SELECT/UPDATE-->
    <?php
    if (isset($_GET["id_up"])) {
        $id_p = addslashes($_GET["id_up"]);
        $res = $p->PreencherDadosPessoa($id_p);
    }

    ?>
    <div class="container-fluid" class="mx-auto">
        <div class="row">

            <section id="esquerda" class="mx-auto">
                <form action="" method="POST" class="was-validated" class="col-md col-md-offset-3e mx-auto">
                    <h2>Cadastrar &#x1f4bb; Usuário</h2>
                    <br>
                    <hr>
                    <label for="nome" class="lb">&#x1f913; Nome: </label>
                    <input type="text" name="nome" id="nome" maxlength="30" class="form-control" placeholder="Nome do Usuário" value="<?php if (isset($res)) {
                                                                                                                                            echo $res['nome'];
                                                                                                                                        } ?>">
                    <label for="telefone" class="lb">&#x260e; Telefone: </label>
                    <input type="text" name="telefone" id="telefone" maxlength="9" class="form-control" placeholder="Número do Telemovél" value="<?php if (isset($res)) {
                                                                                                                                                        echo $res['telefone'];
                                                                                                                                                    } ?>">
                    <label for="email" class="lb">&#x2709; Email: </label>
                    <input type="email" name="email" id="email" maxlength="50" class="form-control" placeholder="Email do Usuário" value="<?php if (isset($res)) {
                                                                                                                                                echo $res['email'];
                                                                                                                                            } ?>"><br>
                    <hr>
                    <input class="btn btn-success" type="submit" value="<?php if (isset($res)) {
                                                                            echo "Atualizar Usuário";
                                                                        } else {
                                                                            echo "Cadastrar Usuário";
                                                                        } ?>">
                    <input type="reset" value="Limpar Usuário"><br>
                    <P id="inf"><a href="">Entrar com Login!</a></P>

                </form>
            </section>

            <section id="direita" class="mx-auto">
                <table class="col-md col-md-offset-3 mx-auto">
                    <caption id="cap">
                        <h2>Usuários &#x1f468; &#x1f469; Cadastrados</h2>
                    </caption>

                    <tr id="titulo">
                        <td>&#x1f913;NOME</td>
                        <td>&#x260e;TELEFONE</td>
                        <td>&#x2709;EMAIL</td>
                        <td>&#x1F510;AÇÕES</td>
                    </tr>
                    <?php
                    //percorre os dados do banco de dados e os exibe na tela
                    $dados = $p->buscarDados();
                    if (count($dados) > 0) { //se há usuários cadastrados percorre-os.
                        for ($i = 0; $i < count($dados); $i++) {
                            echo "<tr>";
                            foreach ($dados[$i] as $k => $v) {
                                //exclui a coluna "id" ao exibir os dados da tabela.
                                if ($k != "id") {
                                    echo "<td>$v</td>";
                                }
                            }
                    ?>
                            <td>
                                <!--botão editar-->
                                <a href="index.php?id_up=<?php echo $dados[$i]['id']; ?>">&#x270e;Editar</a>
                                <!--botão excluir-->
                                <a href="index.php?id_ex=<?php echo $dados[$i]['id']; ?>">&#x2716;Excluir</a>
                            </td>

                        <?php
                            //echo '<td><a href="">&#x270e; Editar</a><a href="">&#x2716; Excluir</a></td>';
                            echo "</tr>";
                        }
                    } else { //se não há usuários cadastrados exibe a mensagem de aviso!
                        ?>
                </table>
                <div class="alert alert-danger">
                    <h4>&#x26A0; Nenhum registro cadastrado!</h4>
                </div>
            <?php
                    }

            ?>
            </section>
        </div>
    </div>


</body>

</html>