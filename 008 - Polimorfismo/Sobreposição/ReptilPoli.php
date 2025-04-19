<?php
require_once 'AnimalPoli.php';
class ReptilPoli extends AnimalPoli{
    private $corEscama;
    
    public function getCorEscama() {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama): void {
        $this->corEscama = $corEscama;
    }
        
    #[\Override]
    public function alimentar() {
        echo "<p>Comendo Vegetais</p>";
    }

    #[\Override]
    public function emitirSom() {
        echo "<p>Som de Réptil</p>";
    }

    #[\Override]
    public function locomover() {
        echo "<p>Rastejando</p>";
    }
}
