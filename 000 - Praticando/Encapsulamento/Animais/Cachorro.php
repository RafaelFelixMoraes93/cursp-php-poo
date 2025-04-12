<?php

require_once 'AnimalInterface.php';
class Cachorro implements AnimalInterface{
    private $nome;
    private $raca;
    private $cor;
    private $fome;
    private $acordado;


    public function __construct($nome, $raca, $cor) {
        $this->nome = $nome;
        $this->raca = $raca;
        $this->cor = $cor;
        $this->fome = 25;
        $this->acordado = true;
    }
    
    public function getNome() {
        return $this->nome;
    }

    public function getRaca() {
        return $this->raca;
    }

    public function getCor() {
        return $this->cor;
    }

    public function getFome() {
        return $this->fome;
    }

    public function getAcordado() {
        return $this->acordado;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setRaca($raca): void {
        $this->raca = $raca;
    }

    public function setCor($cor): void {
        $this->cor = $cor;
    }

    public function setFome($fome): void {
        $this->fome = $fome;
    }

    public function setAcordado($acordado): void {
        $this->acordado = $acordado;
    }

    
    #[\Override]
    public function comer() {
        if($this->getFome() <=49 && $this->getFome()>=0) {
            echo "<br>Comendo ração... " . $this->setFome($this->getFome() +5);
        }
    }

    #[\Override]
    public function emitirSom() {
        if ($this->acordado) {
            echo '<br>Emitindo som: AuAu';
        }
    }

    #[\Override]
    public function exibirFicha() {
        echo "<br><br>---- Ficha ---<br>";
        printf( "Nome: %s<br>Raça: %s<br>Cor: %s<br>Nível de fome: %d<br>Está Acordado: %s<br>",
        $this->getNome(),
        $this->getRaca(),
        $this->getCor(),
        $this->getFome(),
        $this->getAcordado() ? 'Sim' : 'Não');
    }

    #[\Override]
    public function mover() {
        echo '<br>Andando...';
    }
}
