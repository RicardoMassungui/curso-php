
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro de produtos</title>
    <style>

        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: rgba(211, 211, 211, 0.85);    
        }
        section{
            max-width: 320px;
            min-width: 128px;
            background-color: white;
            font-weight: bold;
            padding: 15px;
            margin: auto;
            box-shadow: 1px 1px 3px black;
            border-radius: 10px;
        }
        h1, h2{
         
            text-align: center;
        }

    </style>
</head>
<body>

        
        <section>
            <form action="answer2.php" method="post" name="f_cad" id="fcad">
                <h2>Cadastro &#x1f4bb; Favoritos</h2>
            <hr>
                <label for="Nome">Nome: </label>
            <input type="text" name="nome" size="20" maxlength="30"><br><br>
            <label for="Nome">Senha: </label>
            <input type="password" name="senha" id="" size="20" maxlengt="20"><br><br>
            

                <fieldset><Legend>Sexo: </Legend>
                    <input type="radio" name="sexo" size="20" value="M"
                    checked>Masculino <br>
                    <input type="radio" name="sexo" size="20" value="F">Feminino <br>
                </fieldset><br><br>
            

            <label for="Esportes">Selecione seus Esportes favoritos: </label><br><br>
            <select name="esportes" id="">
                <option value="Futebol">Futebol</option>
                <option value="Basquetebol">Basquetebol</option>
                <option value="Artes Marciais">Artes Marciais</option>
                <option value="Natação"></option>
            </select>
            <br><br>

            <label for="transporte">Selecione seus Transportes favoritos: </label><br><br>
            <input type="checkbox" name="carro" id="" value="1">Carro <br>
            <input type="checkbox" name="moto" id="" value="1">Moto <br>
            <input type="checkbox" name="onibus" id="" value="1">Oníbus <br>
            <br><br>
            <label for="Comentários">Comentários: </label><br><br>
            <textarea name="feedback" id="" cols="35" rows="5"></textarea>
            <hr>
            <input type="submit" value=" gravar Dados ">
            <input type="reset" value=" Limpar ">
            </form>
        </section>

</body>
</html>