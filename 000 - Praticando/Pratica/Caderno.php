<?php

class Caderno {
    private $nome;
    private $cor;
    public $paginas;
    
    public function __construct($nome, $cor, $paginas) {
        $this->nome = $nome;
        $this->cor = $cor;
        $this->paginas = $paginas;
    }
    
    public function getNome() {
        return $this->nome;
    }

    public function getCor() {
        return $this->cor;
    }

    public function getPaginas() {
        return $this->paginas;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setCor($cor): void {
        $this->cor = $cor;
    }

    public function setPaginas($paginas): void {
        $this->paginas = $paginas;
    }



}
