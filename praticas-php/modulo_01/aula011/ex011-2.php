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
    <title>Tabuada-PHP</title>
</head>
<body>
    
    <div>
    <p style="background-color: #465489;"><img src="logotipo-php.png" alt="logotipo-php"></p>
        <strong><p class="tela" >Tela de Exibição PHP</p></strong>
         <select name="tab">
                <?php
                    $m1 = isset($_GET["m1"]) ? $_GET["m1"] : 0;
                    $m2 = isset($_GET["m2"]) ? $_GET["m2"] : 0;
                    $tab = isset($_GET["tab"]) ? $_GET["tab"] : 0;
                
                    $c = 0;
                    do{
                        $tab = $m1. ' x '. $c. ' = '. $m1*$c;     
                        echo"<option >$tab <br></option>";
                        $c++;
                    }while($c <= $m2)
                
                ?>
         </select> 
       
        
    </div>
    &nbsp;&nbsp;&nbsp;&nbsp;<a href="ex011-1.php" target="_self"><input type="button" value="voltar" style="background-color: #465489; color:white;"></a>
</body>
</html>           
              
           
            
             
            
           
           
             
              
                 
                    
              
                  
              
                
             
           
            
            
                
        
       