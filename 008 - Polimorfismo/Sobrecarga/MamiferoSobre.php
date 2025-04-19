<?php
require_once 'AnimalSobre.php';
class MamiferoSobre extends AnimalSobre{
    protected $corPelo;
    
    public function getCorPelo() {
        return $this->corPelo;
    }

    public function setCorPelo($corPelo): void {
        $this->corPelo = $corPelo;
    }    
    
    #[\Override]
    public function emitirSom() {
        echo "<p>Som de mamífero</p>";
    }
}
