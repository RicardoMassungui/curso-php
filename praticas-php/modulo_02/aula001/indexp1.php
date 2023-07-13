<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula-02</title>
</head>
<body>
    <pre>
    <?php
        require_once 'Caneta.class.php';
        $c1 = new Caneta('BIC cristal', 'Azul', 0.5);
        $c2 = new Caneta('CPL', 'Verde', 1.5);
        //métodos modificadores(setters)
        /*$c1->setmodelo('BIC cristal');
        $c1->setponta('0.5');
        print" Eu tenho uma caneta de modelo {$c1->getmodelo()} de ponta {$c1->getponta()}";*/
        
        print_r($c1);
        print_r($c2);

       


        
    ?>  
    </pre>
</body>
</html>
