<?php

class Ser {
    private $nome;
    private $vida;
    private $mana;
    private $vocacao;


    public function getNome() {
        return $this->nome;
    }

    public function getVida() {
        return $this->vida;
    }

    public function getMana() {
        return $this->mana;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setVida($vida): void {
        $this->vida = $vida;
    }

    public function setMana($mana): void {
        $this->mana = $mana;
    }
    
    public function getVocacao() {
        return $this->vocacao;
    }

    public function setVocacao($vocacao): void {
        $this->vocacao = $vocacao;
    }




}