<?php
require_once 'AvePoli.php';
class AraraPoli extends AvePoli{
    #[\Override]
    public function emitirSom() {
        echo "<p>Som: Cantando</p>";
    }
}
