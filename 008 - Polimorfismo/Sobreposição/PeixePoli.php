<?php
require_once 'AnimalPoli.php';
class PeixePoli extends AnimalPoli{
    private $corEscama;
    
    public function getCorEscama() {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama): void {
        $this->corEscama = $corEscama;
    }
        
    #[\Override]
    public function alimentar() {
    echo "<p>Comendo Substâncias</p>";    
    }

    #[\Override]
    public function emitirSom() {
    echo "<p>Peixe não faz som</p>";    
    }

    #[\Override]
    public function locomover() {
    echo "<p>Nadando</p>";
    }
}
