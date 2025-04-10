<?php

class Espada {
    private $nome;
    private $ataque;
    
    public function __construct($nome, $ataque) {
        $this->nome = $nome;
        $this->ataque = $ataque;
    }
    
    public function getNome() {
        return $this->nome;
    }

    public function getAtaque() {
        return $this->ataque;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setAtaque($ataque): void {
        $this->ataque = $ataque;
    }



}
