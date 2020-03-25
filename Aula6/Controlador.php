<?php

//Diferente de java, em php não é necessário explicitar que o método é um método abstrato, 
//escrevendo a palavra à frente do nome do método.
//Pois a Interface já se trata de uma classe abstrata e portanto seus métodos também serão.
// Ex. incorreto:  public abstract function pause();

interface Controlador {

    public function ligar();

    public function desligar();

    public function abrirMenu();

    public function fecharMenu();

    public function maisVolume();

    public function menosVolume();

    public function ligarMudo();

    public function desligarMudo();

    public function play();

    public function pause();
}
