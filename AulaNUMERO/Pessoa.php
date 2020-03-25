<?php

class Pessoa {

//    Atributos
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $experiencia;

//    Getters and Setters
    function getNome() {
        return $this->nome;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function getIdade() {
        return $this->idade;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function getSexo() {
        return $this->sexo;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function getExperiencia() {
        return $this->experiencia;
    }

    function setExperiencia($experiencia) {
        $this->experiencia = $experiencia;
    }
    
//    Métodos
    protected function ganharExperiencia(){
        
    }

}
