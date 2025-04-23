<?php

abstract class Humano {
    protected $nome;
    protected $vida;
    protected $mana;
    protected $sexo;
    
    
    public function getSexo() {
        return $this->sexo;
    }

    public function setSexo($sexo): void {
        $this->sexo = $sexo;
    }
    
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


}
