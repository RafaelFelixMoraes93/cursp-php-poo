<?php
require_once 'Gafanhoto.php';
require_once 'Video.php';
class Visualizacao {
    private $espectador;
    private $filme;
    
    public function __construct($espectador, $filme) {
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->filme->setView($this->filme->getView() +1);
        $this->espectador->setTotalAssistido($this->espectador->getTotalAssistido() +1);
    }
    
    public function getEspectador() {
        return $this->espectador;
    }

    public function getFilme() {
        return $this->filme;
    }

    public function setEspectador($espectador): void {
        $this->espectador = $espectador;
    }

    public function setFilme($filme): void {
        $this->filme = $filme;
    }    
    
    public function avaliar() {
        $this->filme->setAvaliacao(5);
    }
    
    public function avaliarNota($nota) {
        $this->filme->setAvaliacao($nota);
    }
    
    public function avaliarPorcentagem($porc) {
        $nova = 0;
        if($porc <= 20) {
            $nova = 3;
        } elseif ($porc <= 50) {
            $nova = 5;            
        } elseif ($nova <= 90) {
            $nova = 8;
        } else {
            $nova = 10;
        }
        $this->filme->setAvaliacao($nova);
    }
}
