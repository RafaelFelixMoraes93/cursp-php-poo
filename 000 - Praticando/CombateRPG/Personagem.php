<?php
require_once 'CombateInterface.php';
class Personagem implements CombateInterface{
    private $nome;
    private $vida;
    private $ataque;
    private $defesa;
    private $vivo;


    public function __construct($nome, $ataque, $defesa) {
        $this->nome = $nome;
        $this->ataque = $ataque;
        $this->defesa = $defesa;
        $this->setVida(30);
        $this->vivo = true;
    }
    
    public function getNome() {
        return $this->nome;
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

    public function setAtaque($ataque): void {
        $this->ataque = $ataque;
    }

    public function setDefesa($defesa): void {
        $this->defesa = $defesa;
    }
    
    public function getVida() {
        return $this->vida;
    }

    public function setVida($vida): void {
        $this->vida = $vida;
        if ($this->vida <= 0) {
            $this->vivo = false;
        }
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
        echo "<h2>Ficha do Personagem</h2>";
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
