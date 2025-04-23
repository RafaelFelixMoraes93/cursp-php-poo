<?php
require_once 'Humano.php';
require_once 'FuncoesInterface.php';
class Guerreiro extends Humano implements FuncoesInterface{
    public function __construct($nome, $sexo) {
        $this->nome = $nome;
        $this->sexo = $sexo;
        $this->vida = 100;
        $this->mana = 50;
    }
    
    #[\Override]
    public function curarVida($pocao) {
        $this->vida = $this->getVida() + $pocao;
    }

    #[\Override]
    public function encherMana($pocao) {
        $this->mana = $this->getMana() + $pocao;
    }

    #[\Override]
    public function exibirFicha() {
        echo "Nome: {$this->nome}<br>";
        echo "Sexo: {$this->sexo}<br>";
        echo "Vida: {$this->vida}<br>";
        echo "Mana: {$this->mana}<br>";
    }
}
