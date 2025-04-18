<?php
require_once 'Pessoa.php';
class Tecnico extends Pessoa{
    private $registoProfissional;
    private $salario;
    
    public function getRegistoProfissional() {
        return $this->registoProfissional;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setRegistoProfissional($registoProfissional): void {
        $this->registoProfissional = $registoProfissional;
    }

    public function setSalario($salario): void {
        $this->salario = $salario;
    }
    
    public function praticar() {
        echo "{$this->nome} está praticando!<br>";
    }
}
