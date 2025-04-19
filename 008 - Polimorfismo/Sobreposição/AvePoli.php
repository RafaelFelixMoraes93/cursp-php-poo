<?php
require_once 'AnimalPoli.php';
class AvePoli extends AnimalPoli{
    private $corPena;
    
    public function getCorPena() {
        return $this->corPena;
    }

    public function setCorPena($corPena): void {
        $this->corPena = $corPena;
    }
    
    #[\Override]
    public function alimentar() {
        echo "<p>Comer Frutas</p>";
    }

    #[\Override]
    public function emitirSom() {
        echo "<p>Som de Ave</p>";
    }

    #[\Override]
    public function locomover() {
        echo "<p>Voando</p>";
    }
}
