<?php
require_once "Controlador.php";

class ControleRemoto implements Controlador {
    
    private $volume;
    private $ligado;
    private $tocando;
    
//    Construtor
    public function __construct() {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }
    
//    Getters and Setters
    function getVolume() {
        return $this->volume;
    }

    function getLigado() {
        return $this->ligado;
    }

    function getTocando() {
        return $this->tocando;
    }

    function setVolume($volume) {
        $this->volume = $volume;
    }

    function setLigado($ligado) {
        $this->ligado = $ligado;
    }

    function setTocando($tocando) {
        $this->tocando = $tocando;
    }

//    Métodos  
    public function abrirMenu() {
        echo "<p><h3><br> Está ligado?: " . ($this->getLigado()? "Sim":"Não");
        echo "<p><h3><br> Está tocando?: " . ($this->getTocando()? "Sim":"Não");
        echo "<p><h3><br> Volume: " . ($this->getVolume());
        for ($i = 0; $i <= $this->getVolume(); $i +=10){
            echo "|";
        }
        echo "<br>";
    }

    public function desligar() {
        $this->setLigado(false);
        
    }

    public function desligarMudo() {
        
    }

    public function fecharMenu() {
        
    }

    public function ligar() {
        $this->setLigado(true);
    }

    public function ligarMudo() {
        
    }

    public function maisVolume() {
        
    }

    public function menosVolume() {
        
    }

    public function pause() {
        
    }

    public function play() {
        
    }

}
