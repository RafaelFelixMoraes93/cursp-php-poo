<?php
require_once 'PessoaVideo.php';
class Gafanhoto extends PessoaVideo{
    private $login;
    private $totalAssistido;
    
    #[\Override]
    public function __construct($nome, $idade, $sexo, $login) {
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totalAssistido = 0;
    }

    
    public function getLogin() {
        return $this->login;
    }

    public function getTotalAssistido() {
        return $this->totalAssistido;
    }

    public function setLogin($login): void {
        $this->login = $login;
    }

    public function setTotalAssistido($totalAssistido): void {
        $this->totalAssistido = $totalAssistido;
    }

    public function viuMaisUm() {
        $this->totalAssistido++;
    }
}
