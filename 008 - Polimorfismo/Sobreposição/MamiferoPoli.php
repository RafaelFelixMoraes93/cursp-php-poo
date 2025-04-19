<?php
require_once 'AnimalPoli.php';
class MamiferoPoli extends AnimalPoli{
    private $corPelo;
    
    public function getCorPelo() {
        return $this->corPelo;
    }

    public function setCorPelo($corPelo): void {
        $this->corPelo = $corPelo;
    }

    #[\Override]
    public function alimentar() {
        echo "<p>Mamando</p>";
    }

    #[\Override]
    public function emitirSom() {
        echo "<p>Som de mamífero</p>";
    }

    #[\Override]
    public function locomover() {
        echo "<p>Correndo</p>";
    }
}
