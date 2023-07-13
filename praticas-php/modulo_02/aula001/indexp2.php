<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula-02-ex-01</title>
</head>
<body>
    <?php
        require_once 'Aprender.class.php';
        $f1 = new Aprender;
        $f1->ler = true;
        $f1->escrever = false;
        $f1->assistir = true;
        $f1->Praticar = false;
        $f1->compartilhar = true;
        $f1->descansar = true;
        $f1->tudo = true;
        $f1->nada = false;
        $f1->ler();
        $f1->escrever();
        $f1->assistir();
        $f1->praticar();
        $f1->compartilhar();
        $f1->descansar();
        $f1->ler_escrever_assistir();
        $f1->descansar_compartilhar();
        $f1->praticar();
        $f1->tudo();
        $f1->nada();

        
        
        print_r($f1);
        
        
    ?>
</body>
</html>