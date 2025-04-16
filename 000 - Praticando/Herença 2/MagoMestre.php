<?php

require_once 'Mago.php';
class MagoMestre extends Mago implements SerInterface{
    private $tempestadodefogo;
    
   #[\Override]
   public function __construct() {
        $this->setNome("Merlin");
        $this->setVida(100);
        $this->setMana(200);
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