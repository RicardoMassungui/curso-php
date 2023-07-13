<?php

    Class Pessoa{
     
        private $pdo;
        //conexão com Banco de Dados via PDO.
        public function __construct(){
            //PDO
            try{
                $this->pdo = new PDO("mysql:dbname=CRUDPDO;host=127.0.0.1", "root", "");
            }catch(PDOException $e){
                echo "Erro com banco de dados: ". $e->getMessage();
            }
            catch(Exception $e){
                echo "Erro Genérico: ". $e->getMessage();
            }
        }
        //FUNÇÃO PARA BUSCAR DADOS E COLOCAR NO CANTO DIREITO.
        //buscar dados.
        public function buscarDados(){
            $sql = $this->pdo->query("SELECT * FROM PESSOA ORDER BY nome");
            $res = array();
            $res = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $res; 

        }

    
        //Função para cadastrar usuário no banco de dados.
        public function cadastrarPessoa($nome, $telefone, $email){
        //Antes de cadastrar verificar se o email está cadastrado.
        $cmd = $this->pdo->prepare("SELECT id FROM PESSOA WHERE telefone=:t OR email=:e OR nome=:n");
        $cmd->bindValue(":t", $telefone, PDO::PARAM_INT);
        $cmd->bindValue(":e", $email, PDO::PARAM_STR);
        $cmd->bindValue(":n", $nome, PDO::PARAM_STR);
        $cmd->execute();
        //verifica se o email ou telefone já existe no banco.
        if($cmd->rowCount() > 0){
            return false;
        }else{
            //se não existe um email ou telefone cadastrado então cadastra.
            $cmd = $this->pdo->prepare("INSERT INTO PESSOA (nome, telefone, email) VALUES (:n, :t, :e)");
            $cmd->bindValue(":n", $nome, PDO::PARAM_STR);
            $cmd->bindValue(":t", $telefone, PDO::PARAM_INT);
            $cmd->bindValue(":e", $email, PDO::PARAM_STR);
            $cmd->execute();
            return true;
        }
        
        }
        
        //Função para excluir usuário no banco de dados.
        public function ExcluirPessoa($id){
            $cmd = $this->pdo->prepare("DELETE FROM PESSOA WHERE id=:id");
            $cmd->bindValue(":id", $id, PDO::PARAM_INT);
            $cmd->execute();
        }

        //Função para selecionar e preencher os dados dentro das caixas entrada do formulário cadastro.
        public function PreencherDadosPessoa($id){
            $res = array();
            $cmd = $this->pdo->prepare("SELECT * FROM PESSOA WHERE id=:id");
            $cmd->bindValue(":id", $id, PDO::PARAM_INT);
            $cmd->execute();
            $res = $cmd->fetch(PDO::FETCH_ASSOC);
            return $res;
        }

        //Função para pegar os dados vindas do banco de dados preenchidos no formulário cadastro e editá-los ou atualizá-los.
        public function EditarAtualizarDados($id, $nome, $telefone, $email){
         
            //se não existe um email ou telefone cadastrado então cadastra.
            $cmd = $this->pdo->prepare("UPDATE PESSOA SET nome=:n, telefone=:t, email=:e WHERE id=:id");
            $cmd->bindValue(":n", $nome, PDO::PARAM_STR);
            $cmd->bindValue(":t", $telefone, PDO::PARAM_STR);
            $cmd->bindValue(":e", $email, PDO::PARAM_STR);
            $cmd->bindValue(":id", $id, PDO::PARAM_INT);
            $cmd->execute();
            return true;
        }
    }
?>