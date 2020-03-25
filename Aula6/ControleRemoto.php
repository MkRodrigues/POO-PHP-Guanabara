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
//    Setando o s Getters and Setters para privado, 
//    faz com o que os métodos acessores e modificadores não possam ser acessados por referência,
//     bastando o acesso ao controle somente pela interface Controlador criada.
    private function getVolume() {
        return $this->volume;
    }

    private function getLigado() {
        return $this->ligado;
    }

    private function getTocando() {
        return $this->tocando;
    }

    private function setVolume($volume) {
        $this->volume = $volume;
    }

    private function setLigado($ligado) {
        $this->ligado = $ligado;
    }

    private function setTocando($tocando) {
        $this->tocando = $tocando;
    }

//    Métodos  
    public function abrirMenu() {
        echo "<p><h3><br> Está ligado?: " . ($this->getLigado() ? "Sim" : "Não");
        echo "<p><h3><br> Está tocando?: " . ($this->getTocando() ? "Sim" : "Não");
        echo "<p><h3><br> Volume: " . ($this->getVolume());
        for ($i = 0; $i <= $this->getVolume(); $i += 10) {
            echo "|";
        }
        echo "<br>";
    }

    public function desligar() {
        $this->setLigado(false);
    }

    public function desligarMudo() {
        if ($this->getLigado() && $this->getVolume() == 0) {
            $this->setVolume(50);
        }
    }

    public function fecharMenu() {
        echo "Fechando menu...";
    }

    public function ligar() {
        $this->setLigado(true);
        echo "Tv ligada";
    }

    public function ligarMudo() {
        if ($this->getLigado() && $this->getVolume() > 0) {
            $this->setVolume(0);
        }
    }

    public function maisVolume() {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 5);
        }
    }

    public function menosVolume() {
        if ($this->getLigado()) {
            $this->getVolume($this->getVolume() - 5);
        }
    }

    public function pause() {
        if ($this->getLigado() && !($this->getTocando())) {
            $this->setTocando(true);
        }
    }

    public function play() {
        if ($this->getLigado() && $this->getTocando()) {
            $this->setTocando(false);
        }
    }

}
