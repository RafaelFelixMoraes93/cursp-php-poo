<?php

require_once 'Mago.php';
class MagoMestre extends Mago implements SerInterface{
    private $tempestadodefogo;
    
     public function __construct($nome, $vida, $mana) {
        $this->setNome($nome);
        $this->setVida($vida);
        $this->setMana($mana);
        $this->setVocacao("Mago Mestre");
    }
    
    public function getTempestadodefogo() {
        return $this->tempestadodefogo;
    }

    public function setTempestadodefogo($tempestadodefogo): void {
        $this->tempestadodefogo = $tempestadodefogo;
    }

    #[\Override]
    public function exebirFicha() {
        echo "<br>";
        echo "Nome: {$this->getNome()}<br>Vocação: {$this->getVocacao()}<br>Vida: {$this->getVida()}<br>Mana: {$this->getMana()}";
        echo "<br>";
    }

}