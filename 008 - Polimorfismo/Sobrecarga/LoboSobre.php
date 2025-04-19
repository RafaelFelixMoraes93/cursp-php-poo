<?php
require_once 'MamiferoSobre.php';
class LoboSobre extends MamiferoSobre{    
    
    #[\Override]
    public function emitirSom() {
        echo "<p>Auuuuuuuuuuu!</p>";
    }    
}
