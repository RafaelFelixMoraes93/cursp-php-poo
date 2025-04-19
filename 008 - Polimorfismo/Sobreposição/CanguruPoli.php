<?php
require_once 'MamiferoPoli.php';
class CanguruPoli extends MamiferoPoli{
    
    #[\Override]
    public function locomover() {
        echo "<p>Saltando</p>";
    }
}
