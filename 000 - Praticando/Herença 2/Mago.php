<?php
require_once 'Ser.php';
require_once 'SerInterface.php';
class Mago extends Ser implements SerInterface{    
    private $boladefogo;
    public function __construct($nome, $vida, $mana) {
        $this->setNome($nome);
        $this->setVida($vida);
        $this->setMana($mana);
        $this->setVocacao("Mago");
    }
    
    public function getVocacao() {
        return $this->vocacao;
    }

    public function setVocacao($vocacao): void {
        $this->vocacao = $vocacao;
    }
    
    public function getBoladefogo() {
        return $this->boladefogo;
    }

    public function setBoladefogo($boladefogo): void {
        $this->boladefogo = $boladefogo;
    }
    
    public function evoluir(): MagoMestre {
        return new MagoMestre($this->getNome(), $this->getVida(), $this->getMana());
    }


    
    #[\Override]
    public function exebirFicha() {
        echo "<br>";
        echo "Nome: {$this->getNome()}<br>Vocação: {$this->getVocacao()}<br>Vida: {$this->getVida()}<br>Mana: {$this->getMana()}";
        echo "<br>";
    }
}