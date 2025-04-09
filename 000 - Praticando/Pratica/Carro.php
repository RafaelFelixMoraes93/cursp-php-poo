<?php

class Carro {
    private $modelo;
    private $ano;
    private $cor;
    
    public function __construct($modelo, $ano, $cor) {
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->cor = $cor;
    }
    
    public function getModelo() {
        return $this->modelo;
    }

    public function getAno() {
        return $this->ano;
    }

    public function getCor() {
        return $this->cor;
    }

    public function setModelo($modelo): void {
        $this->modelo = $modelo;
    }

    public function setAno($ano): void {
        $this->ano = $ano;
    }

    public function setCor($cor): void {
        $this->cor = $cor;
    }



}
