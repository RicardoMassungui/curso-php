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
    <title>Soma-Procedimento</title>
</head>
<body>
    
    <div>
    <p style="background-color: #465489;"><img src="logotipo-php.png" alt="logotipo-php"></p>
        <strong><p class="tela" >Tela de Exibição PHP</p></strong>
            
        <?php
            echo"<h3>Pocedimentos</h3>";
            function soma($a,$b){
                $s = $a + $b;            
                echo "<br>$a + $b = $s";
            }     
            $y = 2;
            $x = 3;
            soma(1,2);
            soma($y, $x);
            
            echo"<h3>Funções</h3>";
            function adicionar ($a,$b){
                $ad = $a + $b;
                return $ad;
            }
            $r  = 4;
            $s = 3; 
            $res = adicionar($r, $s);
            echo" $r + $s = $res";
            
            function aumentar(){
                $p = func_get_args();
                $t = func_num_args();
                $s = 0;
                for($i = 0 ; $i < $t ; $i++){
                    $s += $p[$i];
                }
                return $s;
            }
             $r = aumentar(3, 5, 2, 5, 7);
             echo"<br>a soma dos valores é $r";
        ?>  
         
        
           
            
             
        
    </div>
    &nbsp;&nbsp;&nbsp;&nbsp;<a href="ex013.html" target="_self"><input type="button" value="voltar" style="background-color: #465489; color:white;"></a>
</body>
</html>