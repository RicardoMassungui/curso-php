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
    <title>Multi-Operações</title>
</head>
<body>
   
    <div>
    <p style="background-color: #465489;"><img src="logotipo-php.png" alt="logotipo-php"></p>
        <strong><p class="tela" >Tela de Exibição PHP</p></strong>
        <?php 
            $n = isset($_GET["n"])?$_GET["n"]:0;
            $oper = isset($_GET["oper"])?$_GET["oper"]:1;
            switch($oper){
                case 1:
                    $r = $n * 2;
                    break;
                case 2: 
                    $r = $n ^ 3;
                    break;
                case 3:
                    $r = sqrt($n);
                    break;
                /*case 4:
                    $r = ($n);
                    break;*/
                case 4:
                    if($n%2==0){
                        $r = '<p style=color:green;>" Número Par!"</p>';
                        
                            
                    }elseif($n%2==1){
                        $r = '<p style=color:red;>"Número Ìmpar!"</p>';
                    }else{
                        $r = '<strong>
                            <p>
                                Nenhum número informado!
                            </p>
                        </strong>';
                    }
                    
                }
            
           
            echo "<strong><p>O resultado da operação solicitada: <span class='foco'>$r</span></p></strong> ";
        
                
           
                
            
                
            
        
        ?> 
        &nbsp;&nbsp;&nbsp;&nbsp;<a href="ex008.html" target="_self"><input type="button" value="voltar" style="background-color: #465489; color:white;"></a>
    </div>
    
</body>
</html>