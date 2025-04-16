<?php

class Animal {
    private $especie;
    private $idade;
    private $sexo;
    private $cor;

    public function getEspecie() {
        return $this->especie;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setEspecie($especie): void {
        $this->especie = $especie;
    }

    public function setIdade($idade): void {
        $this->idade = $idade;
    }

    public function setSexo($sexo): void {
        $this->sexo = $sexo;
    }
    
    public function getCor() {
        return $this->cor;
    }

    public function setCor($cor): void {
        $this->cor = $cor;
    }
    
}
