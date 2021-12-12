<?php

class Caneta{
    private $modelo;
    private $cor;
    private $ponta;
    private $tampada;
    
    public function __construct($m, $c, $p){//metódo construtor = Caneta(), nome da classe atual.
        $this->cor = $c;
        /*$this->ponta = $p;
        $this->modelo = $m;*/
        $this->setponta($p);
        $this->setmodelo($m);
        $this->tampar();
    }
    
    public function tampar(){
        $this->tampada=true;
    } 
    public function getmodelo(){
        return $this->modelo;
    }
    public function setmodelo($m){
        return $this->modelo = $m; 
    }
   
    public function getponta(){
        return $this->ponta;
    }
    public function setponta($p){
        return $this->ponta = $p;
    }
    
}

?>