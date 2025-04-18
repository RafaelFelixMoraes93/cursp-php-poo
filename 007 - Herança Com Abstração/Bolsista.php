<?php
require_once 'Aluno.php';
class Bolsista extends Aluno {
    private $bolsa;
    
    public function getBolsa() {
        return $this->bolsa;
    }

    public function setBolsa($bolsa): void {
        $this->bolsa = $bolsa;
    }
        
    #[\Override]
    public function pagarMensalidade() {
        echo "<p>$this->nome é bolsista! Então paga com desconto!</p>";
    }
    public function renovarBolsa() {
        echo "<p>Bolsa renovada</p>";
    }
}
