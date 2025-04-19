<?php
require_once 'ReptilPoli.php';
class CobraPoli extends ReptilPoli{
    #[\Override]
    public function emitirSom() {
        echo "<p>Som: Shiiiii</p>";
    }
    
}
