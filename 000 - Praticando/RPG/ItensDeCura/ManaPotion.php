<?php

class ManaPotion {
    private $nome;
    private $mana;
    
    public function __construct($nome, $mana) {
        $this->nome = $nome;
        $this->mana = $mana;
    }
    
    public function getNome() {
        return $this->nome;
    }

    public function getMana() {
        return $this->mana;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setMana($mana): void {
        $this->mana = $mana;
    }



}
