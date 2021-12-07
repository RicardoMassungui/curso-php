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
    <title>EasySoftCursomeVideo</title>
</head>
<body>
    
    <div>
    <p style="background-color: #465489;"><img src="logotipo-php.png" alt="logotipo-php"></p>
        <strong><p class="tela" >Tela de Exibição PHP</p></strong>
            
         <?php
            $n = isset($_GET["n"]) ? $_GET["n"] : 1;
            $loop = isset($_GET["loop"]) ? $_GET["loop"] : 1;
            
           /* if() {
                    
                    echo"<h1>
                        NÙMERO-PRIMO
                    </h1>";
                }else{
                    echo"<h1>
                        NÙMERO-NÃO-PRIMO
                    </h1>";
                }*/
                $tpar=0;
                $qpar=0;
                $timpar=0;
                $qimpar=0;

            for($c = 1; $c <= $loop; $c++){
                // pares
                
                
                if($n % 2 == 0){
                    $tpar+=$n;
                    $n = $n;
                }
                if($n % 2 == 0){    
                    $qpar++;
                }
               // Impares
                if($n % 2 == 1){
                    $timpar+=$n;
                }
                if($n % 2 == 1){
                    $qimpar++;
                }
                
            }
            
            echo"<select name='res'>
            <option><p>Ver Resultados!<br></p></option>
            <option><p>Total Números Pares: $tpar<br></p><option>   
            <option><p>Números pares detetados: $qpar<br></p><option>
            <option><p>Total Números ímpares: $timpar<br></p><option>
            <option><p>Números ímpares detetados: $qimpar<br></p><option>
            </select>";
             
           
            
                
            
           
            
                
        
        ?> 
        &nbsp;&nbsp;&nbsp;&nbsp;<a href="ex012.html" target="_self"><input type="button" value="voltar" style="background-color: #465489; color:white;"></a>
    </div>
    
</body>
</html>