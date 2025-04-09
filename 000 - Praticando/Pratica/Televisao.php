<?php

class Televisao {
    private $modelo;
    private $ano;
    private $ligada;
    
    public function __construct($modelo, $ano) {
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->setLigada(true);
    }
    
    public function getModelo() {
        return $this->modelo;
    }

    public function getAno() {
        return $this->ano;
    }

    public function getLigada() {
        return $this->ligada;
    }

    public function setModelo($modelo): void {
        $this->modelo = $modelo;
    }

    public function setAno($ano): void {
        $this->ano = $ano;
    }

    public function setLigada($ligada): void {
        $this->ligada = $ligada;
    }


}
