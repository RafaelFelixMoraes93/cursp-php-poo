<?php

class Cachorro {
    private $raca;
    private $cor;
    private $nome;
    private $idade;
    
    public function __construct($raca, $cor, $nome, $idade) {
        $this->raca = $raca;
        $this->cor = $cor;
        $this->nome = $nome;
        $this->idade = $idade;
    }
    
    public function emitirSom() {
        echo 'Latindo... Au Au';
    }


    public function getRaca() {
        return $this->raca;
    }

    public function getCor() {
        return $this->cor;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setRaca($raca): void {
        $this->raca = $raca;
    }

    public function setCor($cor): void {
        $this->cor = $cor;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setIdade($idade): void {
        $this->idade = $idade;
    }



}
