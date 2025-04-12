<?php
require_once 'VeiculoInterface.php';
class Carro implements VeiculoInterface{
    private $marca;
    private $modelo;
    private $cor;
    private $chassis;
    private $velocidade;
    private $ligado;
    
    public function __construct($marca, $modelo, $cor, $chassis) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->chassis = $chassis;
        $this->setVelocidade(0);
        $this->setLigado(false);
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

    public function getChassis() {
        return $this->chassis;
    }

    public function getVelocidade() {
        return $this->velocidade;
    }

    public function getLigado() {
        return $this->ligado;
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

    public function setChassis($chassis): void {
        $this->chassis = $chassis;
    }

    public function setVelocidade($velocidade): void {
        $this->velocidade = $velocidade;
    }

    public function setLigado($ligado): void {
        $this->ligado = $ligado;
    }

    #[\Override]
    public function aceletar() {
        if($this->ligado) {
            $this->setVelocidade($this->getVelocidade()+5);
        }
    }

    #[\Override]
    public function desligar() {
        if($this->ligado && $this->velocidade == 0) {
            $this->setLigado(false);
        }
    }

    #[\Override]
    public function exibirFicha() {
        printf("--- Ficha ---<br>Marca: %s<br>Modelo: %s<br>Cor: %s<br>Chassis: %s<br>Velocidade: %s<br>Ligado: %s",
                $this->getMarca(),
                $this->getModelo(),
                $this->getCor(),
                $this->getChassis(),
                $this->getVelocidade(),
                $this->getLigado() ? "Ligado" : "Desligado"
                );
    }

    #[\Override]
    public function frear() {
        if($this->ligado && $this->velocidade >0) {
            $this->setVelocidade($this->getVelocidade()-5);
        }
    }

    #[\Override]
    public function ligar(){
        if(!$this->ligado) {
            $this->setLigado(true);
        }
    }
}
