<?php

class Caneta {

    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function rabiscar() {

        if ($this->tampada == true) {

            echo "<p><h3>Destampe a caneta " . $this->modelo . " para escrever!</h3></p>";
        } else {

            echo "<p><h3>Rabiscando...</h3></p>";
        }
    }

    protected function tampar() {
        $this->tampada = true;
    }

    private function destampar() {
        $this->tampada = false;
    }

}
