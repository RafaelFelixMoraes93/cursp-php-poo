<?php
require_once 'MamiferoPoli.php';
class CachorroPoli extends MamiferoPoli{
    #[\Override]
    public function emitirSom() {
        echo "<p>Som: Auau</p>";
    }
}
