<?php
require_once 'ReptilPoli.php';
class TartarugaPoli extends ReptilPoli{
    #[\Override]
    public function locomover() {
        echo "<p>Andando beeeeem de vagar</p>";
    }
}
