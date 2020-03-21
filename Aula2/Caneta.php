<?php

class Caneta {
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;
    
    function rabiscar(){
        
        if ($this->tampada == true){
            
            echo "<p><h3>Destampe a caneta " . $this->modelo . " para escrever!</h3></p>";
        }else{
            
            echo "<p><h3>Rabiscando...</h3></p>";
        }
    }
    
    function tampar(){
        $this->tampada = true;
    }
 
    function destampar(){
        $this->tampada = false;
    }
    
}
