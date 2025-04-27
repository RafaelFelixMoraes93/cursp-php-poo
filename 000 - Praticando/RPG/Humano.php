<?php

abstract class Humano {
    protected $nome;
    protected $vida;
    protected $vidamaxima;
    protected $mana;
    protected $manamaxima;
    protected $ataque;
    protected $defesa;
    protected $sexo;
    
    public function getAtaque() {
        return $this->ataque;
    }

    public function getDefesa() {
        return $this->defesa;
    }

    public function setAtaque($ataque): void {
        $this->ataque = $ataque;
    }

    public function setDefesa($defesa): void {
        $this->defesa = $defesa;
    }

        
    public function getManamaxima() {
        return $this->manamaxima;
    }

    public function setManamaxima($manamaxima): void {
        $this->manamaxima = $manamaxima;
    }

    
    public function getVidamaxima() {
        return $this->vidamaxima;
    }

    public function setVidamaxima($vidamaxima): void {
        $this->vidamaxima = $vidamaxima;
    }

        
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
