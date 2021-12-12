<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula-02-ex-03</title>
</head>
<body>
    <?php
        require_once 'Computador.php';
        $pc = new Computador;
        $pc->monitor = true;
        $pc->caixa = false;
        $pc->teclado = true;
        $pc->mouse = false;
        $pc->so = false; 
        $pc->t_so = "M-W10";
        $pc->cor ="petra";
        $pc->pc_so();
        $pc->pc_ligado_desligado();
        $pc->pc_digita_clica();

        print_r($pc);
        
        
    ?>
</body>
</html>