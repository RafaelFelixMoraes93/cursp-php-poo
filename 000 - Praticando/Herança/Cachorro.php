<?php
require_once 'AnimalInterface.php';
require_once 'Animal.php';
class Cachorro extends Animal implements AnimalInterface{
    private $nome;
    private $raca;
    
    public function __construct($nome, $raca, $cor, $idade) {
        $this->nome = $nome;
        $this->raca = $raca;
        $this->setCor($cor);
        $this->setIdade($idade);
    }

    
    public function getNome() {
        return $this->nome;
    }

    public function getRaca() {
        return $this->raca;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setRaca($raca): void {
        $this->raca = $raca;
    }

        
    #[\Override]
    public function caminhar() {
        echo "{$this->nome} está caminhando...<br>";
    }

    #[\Override]
    public function comer() {
        echo "{$this->nome} está comendo...";
    }

    #[\Override]
    public function emitirSom() {
        echo "{$this->nome} está latindo: AuAu";
    }

    #[\Override]
    public function exibirFicha() {
        echo "<hr>";
        echo "Nome: {$this->nome}<br>Raca: {$this->raca}<br>Idade: {$this->getIdade()}<br>Cor: {$this->getCor()}<br>";
        echo "<hr>";
    }

    #[\Override]
    public function mover() {
        
    }
}