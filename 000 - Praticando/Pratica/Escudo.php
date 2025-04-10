<?php

class Escudo {
    private $nome;
    private $defesa;
    
    public function __construct($nome, $defesa) {
        $this->nome = $nome;
        $this->defesa = $defesa;
    }
    
    public function getNome() {
        return $this->nome;
    }

    public function getDefesa() {
        return $this->defesa;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setDefesa($defesa): void {
        $this->defesa = $defesa;
    }



}
