<?php
require_once 'AcoesVideoInterface.php';
class Video implements AcoesVideoInterface{
    private $titulo;
    private $avaliacao;
    private $view;
    private $curtidas;
    private $reproduzindo;
    
    public function __construct($titulo) {
        $this->titulo = $titulo;
        $this->avaliacao = 1;
        $this->view = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
    }

    
    public function getTitulo() {
        return $this->titulo;
    }

    public function getAvaliacao() {
        return $this->avaliacao;
    }

    public function getView() {
        return $this->view;
    }

    public function getCurtidas() {
        return $this->curtidas;
    }

    public function getReproduzindo() {
        return $this->reproduzindo;
    }

    public function setTitulo($titulo): void {
        $this->titulo = $titulo;
    }

    public function setAvaliacao($avaliacao): void{
        $media = ($this->avaliacao + $avaliacao)/$this->view;
        $this->avaliacao = $media;
    }

    public function setView($view): void {
        $this->view = $view;
    }

    public function setCurtidas($curtidas): void {
        $this->curtidas = $curtidas;
    }

    public function setReproduzindo($reproduzindo): void {
        $this->reproduzindo = $reproduzindo;
    }

    #[\Override]
    public function like() {
        $this->curtidas++;
    }

    #[\Override]
    public function pause() {
        $this->reproduzindo = false;
    }

    #[\Override]
    public function play() {
        $this->reproduzindo = true;
    }
}
