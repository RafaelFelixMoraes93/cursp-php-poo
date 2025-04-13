<?php
require_once 'LutaInterface.php';
class Lutador implements LutaInterface{
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;
    
    public function __construct($nome, $nacionalidade, $idade, $altura, $peso) {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->peso = $peso;
        $this->setCategoria();
        $this->setVitorias(0);
        $this->setDerrotas(0);
        $this->setEmpates(0);
    }
    
    public function getNome() {
        return $this->nome;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getVitorias() {
        return $this->vitorias;
    }

    public function getDerrotas() {
        return $this->derrotas;
    }

    public function getEmpates() {
        return $this->empates;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setNacionalidade($nacionalidade): void {
        $this->nacionalidade = $nacionalidade;
    }

    public function setIdade($idade): void {
        $this->idade = $idade;
    }

    public function setAltura($altura): void {
        $this->altura = $altura;
    }

    public function setPeso($peso): void {
        $this->peso = $peso;
        $this->setCategoria();
    }

    public function setCategoria() {
        if ($this->peso <52.2) {
            $this->categoria = "Inválido";
        } elseif ($this->peso <=70.3) {
             $this->categoria = "Leve";
        } elseif ($this->peso <=83.9) {
            $this->categoria = "Médio";
        } elseif ($this->peso <=120.2) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválido";
        }
    }

    public function setVitorias($vitorias): void {
        $this->vitorias = $vitorias;
    }

    public function setDerrotas($derrotas): void {
        $this->derrotas = $derrotas;
    }

    public function setEmpates($empates): void {
        $this->empates = $empates;
    }

    #[\Override]
    public function apresentar() {
        echo "<p>----------------------------</p>";
        echo "<p>CHEGOU A HORA! o lutador " . $this->getNome();
        echo " veio diretamente de " . $this->getNacionalidade();
        echo "tem " .$this->getIdade() . " anos e pesa " . $this->getPeso() . "KG\n";
        echo "Ele tem " . $this->getVitorias() . " vitórias ";
        echo $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " empates";
        echo "<p>----------------------------</p>";
    }

    #[\Override]
    public function empatarLuta() {
        $this->setEmpates($this->getEmpates()+1);
    }

    #[\Override]
    public function ganharLuta() {
        $this->setVitorias($this->getVitorias()+1);
    }

    #[\Override]
    public function perderLuta() {
        $this->setDerrotas($this->getDerrotas()+1);
    }

    #[\Override]
    public function status() {
        echo "<p>----------------------------</p>";
        printf("%s é um peso %s com %s vitórias, %s derrotas e %s empates.\n",
                $this->getNome(),
                $this->getCategoria(),
                $this->getVitorias(),
                $this->getDerrotas(),
                $this->getEmpates());
        echo "<p>----------------------------</p>";
    }
}
