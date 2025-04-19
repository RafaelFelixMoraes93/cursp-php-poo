<?php
require_once 'PeixePoli.php';
class GoldFishPoli extends PeixePoli{
    #[\Override]
    public function emitirSom() {
        echo "<p>Som: Não emite som</p>";
    }
    
}
