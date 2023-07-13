<?php
   

           $arquivo = fopen("contador.txt", "r");
            $contador = fread($arquivo, 21);
            $contador++;
            $arquivo = fopen("contador.txt", "w");
            fwrite($arquivo, $contador);
            fclose($arquivo);

            echo"Quantidade de acesso: $contador<br>";
        ?>