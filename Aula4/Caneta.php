<?php

class Caneta {
    public $modelo;
    private $ponta;
    private $cor;
    private $tampada;
    
//    Construtor sem parâmetro
//    O método Construtor também pode ser criado como nome da classe public function Caneta(){}
//    public function __construct() {
//        $this->cor = "Azul";
//        $this->tampar();
//    }
    
    public function Caneta($modelo, $cor, $ponta){
        $this->setModelo($modelo);
        $this->setCor($cor);
        $this->setPonta($ponta);
        $this->tampar();
        
    }
    
//    Getters and Setters    
    public function getModelo(){
        return $this->modelo;
    }
    
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    
    public function getPonta(){
        return $this->ponta;
    }
    
    public function setPonta($ponta){
        $this->ponta = $ponta;
    }
    
    public function getCor(){
        return $this->cor;
    }
    
    public function setCor($cor){
        $this->cor = $cor;
    }
    
    public function getTampada(){
        return $this->tampada;
    }
    
    public function setTampada($tampada){
        $this->tampada = $tampada;
    }
    
//    Métodos
    public function tampar(){
        $this->tampada = true;
    }
    
    public function destampar(){
        $this->tampada = false;
    }
}
