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
    <title>Biblio-Artigos-PHP</title>
</head>
<body>
    
    <div>
    <p style="background-color: #465489;"><img src="logotipo-php.png" alt="logotipo-php"></p>
        <strong><p class="tela" >Tela de Exibição PHP</p></strong>
        <?php 
            $lp = isset($_GET["lp"]) ? $_GET["lp"] : 0;
           switch($lp){
                        case 1:
                            $lp = '<img src="imagens/logotipo-html5-red-100.png" alt="html"><p style=text-align:justify;><blockquote>
                            <strong>HTML5</strong> (Hypertext Markup Language,versão 5) é uma linguagem de marcação para a World Wide Web e é uma tecnologia chave da Internet, originalmente proposto por Opera Software. criado por Tim Berners-Lee no CERN. 
                                                                                  
                        </blockquote></p>';
                        break;
                        case 2:
                            $lp = '<img src="imagens/logotipo-css3-100.png" alt="logo-css3"><p style=text-align:justify;><blockquote>
                            <strong>CSS</strong> (Cascading Style Sheets) é uma linguagens de marcação de de folhas de estilos em cascatas, Usado para descrever uma apresentação de um documento escrito em uma linguagem de marcação tal como o HTML(Linguagem de marcação de Hipertextos). 
                                
                            </blockquote></p>';
                        break;
                        case 3:
                            $lp = '<img src="imagens/logotipo-javascript-100.png" alt="javascript"><p style=text-align:justify;><blockquote>
                            <strong>JavaScript</strong> (Linguagem de Script) é uma linguagem de programação interpretada estruturada, de script em alto nível com tipagem dinâmica fraca e multiparadigma(protótipos, orientado a objeto, imperativo e, funcional). criada por Branden Eich, atualmente considerada a principal linguagem de programação <em>cliente-side</em> em navegadores web.
                        
                            </blockquote></p>';
                        break;
                        case 4:
                            $lp = '<img src="imagens/logotipo-php-100.png" alt="html"><p style=text-align:justify;><blockquote>
                            <strong>PHP</strong> (um acrônimo recursivo para "PHP: Hypertext Preprocessor", originalmente Personal Home Page) é uma linguagem interpretada livre, usada originalmente apenas para odesenvolvimento de aplicações presentes e atuantes no lado doservidor, capazes de gerar conteúdo dinâmico na World Wide Web. Figura entre as primeiras linguagens passíveis de inserção em documentos HTML, dispensando em muitos casos o uso de arquivos externos para eventuais processamentos de dados.
                             
                        </blockquote></p>'; 
                        break;
                        case 5:
                            $lp = '<img src="imagens/logotipo-java.png" alt="html"><p style=text-align:justify;><blockquote>
                            <strong>Java</strong> é uma linguagem de programação orientada a objetos desenvolvida na
                            década de 90 por uma equipe de programadores chefiada por James Gosling, na empresa Sun Microsystems. atualmente considera umas das mais populares linguagens de programação através da sua portbilidade com a maioria dos sistemas e dispositipos.
                              
                            </blockquote></p>';
                        break;
                        case 6:
                            $lp = '<img src="imagens/logotipo-sql-100.png" alt="html"><p style=text-align:justify;><blockquote>
                            <strong>SQL</strong> (Structured Query Language) é a linguagem de consulta estruturada padrão utilizada pelos banco de dados relacionais. E no gerenciadores de bancos de dados (SGBD). na manipulação, inclusão, exclusão de dados em uma estrutura de dados relacional.
                                
                            </blockquote></p>';
                        break;
           }
            
           echo"$lp"; 
            
                
        
        ?> 
        
    </div>
    &nbsp;&nbsp;&nbsp;&nbsp;<a href="ex009-2.html" target="_self"><input type="button" value="voltar" style="background-color: #465489; color:white;"></a>
</body>
</html>              
                                
                                
                                
                                
                            