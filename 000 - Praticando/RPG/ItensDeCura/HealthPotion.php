<?php

class HealthPotion {
    private $nome;
    private $vida;
    
    public function __construct($nome, $vida) {
        $this->nome = $nome;
        $this->vida = $vida;
    }
    
    public function getNome() {
        return $this->nome;
    }

    public function getVida() {
        return $this->vida;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setVida($vida): void {
        $this->vida = $vida;
    }



}
