<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link rel="shortcut icon" href="logotipo-php.png" type="image/x-icon">
    <style>
        body{
            background-color: #777bb3;
        }
        p.tela{
            background-color: #777bb3; 
            color: white; 
            font-family: Arial, Helvetica, sans-serif;
            padding: 10px;
        }
        .foco{
            color: red;
        }    
    </style>
    <title>string</title>
</head>
<body>
    
    <div>
    <p style="background-color: #465489;"><img src="logotipo-php.png" alt="logotipo-php"></p>
        <strong><p class="tela" >Tela de Exibição PHP</p></strong>
            
         <?php
           echo "<h3>Funções para manipulação de string</h3></br>";
               
           
            /*$p = "leite";
            $v = 99.9;  
            //echo"O $p custa Kzs $v". number_format($v, 2);
            printf( "O %s custa kzs %2.f ", $p, $v);*/
           
            /*$vt[0]= 5;
            $vt[1]= 3;
            $vt[2]= 2;
            //print_r($vt);
            $vt = var_dump(3,4,5,6,3,2);
            print_r($vt);*/
            
            /*$texto="Ricardo massungui é um programador, full-stack! que pretende criar um site comercial que disponibiliza livros gratuitamente, tudo apenas utilizando apenas linguagens nativas para desenvolvimento de aplicativos web dinámicos e inteligentes!";
            $res = wordwrap($texto, 5, "<br>\n", false);
            echo $res;*/

           /*$texto = "Cursoemvideo";
           $tamanho = strlen($texto);
           echo "a palava <q>$texto</q> tem $tamanho strings";*/
           
           /*$nome = "  josé da silva   ";
           echo(strlen($nome));
           $novo = trim($nome);
           echo"$novo";
           echo(strlen($novo));*/

            /*$nome = "  josé da silva   ";
           echo(strlen($nome));
           $novo = ltrim($nome);
           echo"$novo";
           echo(strlen($novo));*/

           /*$nome = "  josé da silva   ";
           echo(strlen($nome));
           $novo = rtrim($nome);
           echo"$novo";
           echo(strlen($novo));*/
            
           /*$frase = "eu programo em php, javascript, sql(mysql)";
           $cont = str_word_count($frase, 0 );
           print($cont);*/

           /*$site = "Curso em Vídeo";
           $vetor = explode(" ",$site);
           print_r($vetor);*/
           
           /*$nome = "ricardo";
           $vetor = str_split($nome);
           print_r($vetor);*/

           /*$vetor[0] = "Curso";
           $vetor[1] = "em";
           $vetor[2] = "Vídeo";
           $texto = implode("#", $vetor);
           print($texto);*/

           /*$letra = chr(67);
           echo"A letra de código 67 é $letra";*/

           /*$letra = "C";
           $cod = ord($letra);
           echo"O código da letra $letra é $cod";*/
           
           /*$nome = "Gustavo Guanabara";
           echo strtolower($nome);*/
                
            /*$nome = "ricardo massungui";
            print(strtoupper($nome));*/

            /*$nome = "ricardo massungui";
            print(ucfirst($nome));*/
        ?> 
        
    </div>
    &nbsp;&nbsp;&nbsp;&nbsp;<a href="ex01...html" target="_self"><input type="button" value="voltar" style="background-color: #465489; color:white;"></a>
</body>
</html>