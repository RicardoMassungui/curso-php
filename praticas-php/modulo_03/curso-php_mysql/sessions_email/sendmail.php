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
            background-color: rgb(29, 89, 191);
           
        }
        div{
            position:relative;

        }
        section{
            position: absolute;
            left:  50%;
            top: 50%;
            transform: translate(-50%, 50%);
            max-width: 260px;
            min-width: 110px;
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
        input, textarea{
            padding: 5px;
            cursor: pointer;
            font-family: Arial, Helvetica, sans-serif;
        }
        input:hover{
            border-color: rgb(29, 89, 191);
        
        }
        input[type="submit"], input[type="reset"]{
            font-weight: bold;
        }
        label{
            color: gray;
        }
    </style>
</head>
<body>
        
        <div>
            <section>
                <form action="email.php" method="post" name="f_cad" id="fcad">
                    <h2>Send&#x1f4bb;Email</h2>
                <hr>
                <label for="">Email: </label><br>
                <input type="text" name="email" size="30" maxlength="50"><br><br>
                <label for="">Assunto: </label><br>
                <input type="text" name="assunto" size="30" maxlength="50"><br><br>
                <label for="">Mensagem: </label><br>
                <textarea name="msg" id="" cols="30" rows="6"></textarea><br><br>
                <hr>
                <input type="submit" value=" gravar ">
                <input type="reset" value=" Limpar ">
                </form>
            </section>
        </div>

</body>
</html>