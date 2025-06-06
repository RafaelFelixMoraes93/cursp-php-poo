<?php
require_once 'Humano.php';
require_once 'FuncoesInterface.php';
class Mago extends Humano implements FuncoesInterface {
    public function __construct($nome, $sexo) {
        $this->nome = $nome;
        $this->sexo = $sexo;
        $this->vida = 50;
        $this->vidamaxima = 50;
        $this->mana = 100;
        $this->manamaxima = 100;
        $this->ataque = 2;
        $this->defesa = 2;
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
        echo "Vida: {$this->vida}/{$this->vidamaxima}<br>";
        echo "Mana: {$this->mana}/{$this->manamaxima}<br>";
    }
}
