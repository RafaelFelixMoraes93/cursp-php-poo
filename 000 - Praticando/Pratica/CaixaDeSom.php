<?php

class CaixaDeSom {
    private $marca;
    private $modelo;
    private $cor;
    private $volume;
    
    public function __construct($marca, $modelo, $cor, $volume) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->volume = $volume;
    }
    
    public function aumentarVolume() {
        $this->volume++;
    }
    
    public function aaixarVolume() {
        $this->volume--;
    }


    public function getMarca() {
        return $this->marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getCor() {
        return $this->cor;
    }

    public function getVolume() {
        return $this->volume;
    }

    public function setMarca($marca): void {
        $this->marca = $marca;
    }

    public function setModelo($modelo): void {
        $this->modelo = $modelo;
    }

    public function setCor($cor): void {
        $this->cor = $cor;
    }

    public function setVolume($volume): void {
        $this->volume = $volume;
    }



}
