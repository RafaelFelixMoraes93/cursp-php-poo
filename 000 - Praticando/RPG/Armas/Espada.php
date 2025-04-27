<?php

class Espada {
    private $nome;
    private $ataque;
    
    public function __construct($nome, $ataque) {
        $this->nome = $nome;
        $this->ataque = $ataque;
    }
    
    public function getAtaque() {
        return $this->ataque;
    }

    public function setAtaque($ataque): void {
        $this->ataque = $ataque;
    }
    
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

}
