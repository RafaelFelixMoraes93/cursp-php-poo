<?php
require_once 'CombateInterface.php';
class Rato implements CombateInterface{
    private $nome;
    private $vida;
    private $ataque;
    private $defesa;
    private $vivo;


    public function __construct($nome) {
        $this->nome = $nome;
        $this->setAtaque(5);
        $this->setDefesa(3);
        $this->setVida(30);
        $this->vivo = true;
    }
    
    public function getNome() {
        return $this->nome;
    }

    public function getVida() {
        return $this->vida;
    }

    public function getAtaque() {
        return $this->ataque;
    }

    public function getDefesa() {
        return $this->defesa;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setVida($vida): void {
        $this->vida = $vida;
    }

    public function setAtaque($ataque): void {
        $this->ataque = $ataque;
    }

    public function setDefesa($defesa): void {
        $this->defesa = $defesa;
    }
    
    public function getVivo() {
        return $this->vivo;
    }

    public function setVivo($vivo): void {
        $this->vivo = $vivo;
    }

    
    #[\Override]
    public function ataque() {
        return $this->ataque;
    }

    #[\Override]
    public function defesa() {
        return $this->defesa;
    }

    #[\Override]
    public function exibirFicha() {
        echo "<hr>";
        echo "<h2>Ficha do Monstro</h2>";
    printf(
        "Nome: %s<br>Vida: %d<br>Ataque: %d<br>Defesa: %d<br>Está vivo: %s<br>",
        $this->nome,
        $this->vida,
        $this->ataque,
        $this->defesa,
        $this->estaVivo() ? "Sim" : "Não");
        echo "<hr>";
    }

    #[\Override]
    public function estaVivo() {
        return $this->vida > 0;
    }
}
