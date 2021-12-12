<?php

class Aprender{
    var $ler;
    var $escrever;
    var $assistir;
    var $praticar;
    var $compartilhar;
    var $descansar;
    var $tudo;
    var $nada;

 function ler(){
        if($this->ler== true){
            echo"<p>3.5%</p>";
        }else{
            echo"<p>0%</p>";
        }
    }
    function escrever(){
        if($this->escrever== true){
            echo"<p>escrever: 3.5%</p>";
        }else{
            echo"<p>escrever: 0%</p>";
        }
    }
    function assistir(){
        if($this->assistir== true){
            echo"<p>assistir: 3%</p>";
        }else{
            echo"<p>assistir: 0%</p>";
        }
    }

    function compartilhar(){
        if($this->compartilhar== true){
            echo"<p>compartilhar: 10%</p>";
        }else{
            echo"<p>compartilhar: 0%</p>";
        }
    }

    function descansar(){
        if($this->descansar== true){
            echo"<p>descansar: 10%</p>";
        }else{
            echo"<p>descansar: 0%</p>";
        }
    }
    
    function ler_escrever_assistir(){
        if($this->ler== true && $this->escrever== true && $this->assistir== true){
            echo"<p>ler_escrever_assistir: 10%</p>";
        }else{
            echo"<p>ler_escrever_assistir: 0%</p>";
        }
    }

    function descansar_compartilhar(){
        if($this->descansar==true && $this->compartilhar==true){
        echo"<p>descansar_compartilhar: 20%</p>";
        }else{
            echo"<p>descansar_compartilhar: 0%</p>";

        }
    }

    function praticar(){
        if($this->praticar==true){
        echo"<p>praticar: 70%</p>";
                
            
        }else{
            echo"<p>praticar: 0% </p>";
                
           

        }
    }

    function tudo(){
        if($this->tudo==true){
        echo"<p>Tudo: 100%</p>";
           
                
        }else{
            echo"<p>Tudo: 0%</p>";
            
               

        }
    }

    function nada(){
        if($this->nada==true){
        echo"<p>nada: 100%</p>";
           
                
        }else{
            echo"<p>nada: 0%</p>";
            
               

        }
    }


}

?>