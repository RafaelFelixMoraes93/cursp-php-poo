<?php

class Comida {
    private $nome;
    private $peso;
    
    public function __construct($nome, $peso) {
        $this->nome = $nome;
        $this->peso = $peso;
    }
    
    public function getNome() {
        return $this->nome;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setPeso($peso): void {
        $this->peso = $peso;
    }



}
