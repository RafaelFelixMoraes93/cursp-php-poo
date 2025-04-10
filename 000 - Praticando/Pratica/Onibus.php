<?php

class Onibus {
    private $marca;
    private $modelo;
    private $ano;
    private $velocidade;
    private $freiodemao;
    
    public function __construct($marca, $modelo, $ano, $velocidade) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->velocidade = $velocidade;
        $this->setFreiodemao(true);
    }


    public function getMarca() {
        return $this->marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getAno() {
        return $this->ano;
    }

    public function getVelocidade() {
        return $this->velocidade;
    }

    public function getFreiodemao() {
        return $this->freiodemao;
    }

    public function setMarca($marca): void {
        $this->marca = $marca;
    }

    public function setModelo($modelo): void {
        $this->modelo = $modelo;
    }

    public function setAno($ano): void {
        $this->ano = $ano;
    }

    public function setVelocidade($velocidade): void {
        $this->velocidade = $velocidade;
    }

    public function setFreiodemao($freiodemao): void {
        $this->freiodemao = $freiodemao;
    }
}
