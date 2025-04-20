<?php
require_once 'PessoaComer.php';
require_once 'ComerInterface.php';
require_once 'Comida.php';
class Comilao extends PessoaComer implements ComerInterface{
    
    public function __construct($nome, $peso) {
        $this->nome = $nome;
        $this->peso = $peso;
        
    }

    
    #[\Override]
    public function comer($comida) {
        $this->setPeso($this->getPeso() + $comida->getPeso());
    }
}
