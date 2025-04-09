<?php

class Pessoa {
    private $nome;
    private $idade;
    private $rg;
    private $cpf;
    
    public function __construct($nome, $idade, $rg, $cpf) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->rg = $rg;
        $this->cpf = $cpf;
    }
    
    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getRg() {
        return $this->rg;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setIdade($idade): void {
        $this->idade = $idade;
    }

    public function setRg($rg): void {
        $this->rg = $rg;
    }

    public function setCpf($cpf): void {
        $this->cpf = $cpf;
    }



}
