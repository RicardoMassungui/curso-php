<?php

class Computador{
    var $monitor;
    var $caixa;
    var $teclado;
    var $mouse;
    var $so;
    var $cor;
    var $t_so;
    
    function pc_so(){
        if($this->monitor==true && $this->caixa==true){
            echo"<p>
                pc sistema operacional funciona com visualização e sem clicar, e teclar!
            </p>";
        }else if($this->caixa==true){
            echo"<p>
                pc sistema operacional funciona sem visualização!
            </p>";
        }else{
            echo"<p>
                pc sistema operacional não funciona!
            </p>";
        }
    }
    
    function pc_ligado_desligado(){
        if($this->monitor==true && $this->caixa==true){
        echo"<p>
            <audio src='resultado.3gpp'></audio>
        </p>";
        echo"<p>
            Pc ligado sem clicar e teclar!
        </p>";
    }else{
        echo"Pc desligado!";
    }
   }




   function pc_digita_clica(){
       if($this->monitor==true && $this->caixa==true && $this->mouse==true && $this->teclado==true){
           echo"<p>pc digita e clica!</p>";
       
        }else{
            echo"<p>pc não digita e clica!</p>";
            
                
        }
   }
}   

?>