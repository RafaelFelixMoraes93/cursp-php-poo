<?php

abstract class PessoaComer {
    protected $nome;
    protected $peso;
    
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
