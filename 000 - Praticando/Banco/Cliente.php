<?php

class Cliente {
    public $numeroConta;
    protected $tipoConta;
    private $donoConta;
    private $saldoConta;
    private $statusConta;
    
    public function __construct($numeroConta, $tipoConta, $donoConta, $saldoConta) {
        $this->numeroConta = $numeroConta;
        $this->tipoConta = $tipoConta;
        $this->donoConta = $donoConta;
        $this->saldoConta = $saldoConta;
        $this->setStatusConta("Aberta");
    }
    
    public function abrirConta() {
        $this->statusConta = "Aberta";
        echo '<p>Conta aberta com sucesso</p>';
    }
    
    public function fecharConta() {
        if($this->getSaldoConta() == 0) {
            $this->statusConta = "Fechada";
            echo '<p>Conta Fechada com sucesso!</p>';
        } else {
            echo '<p><strong>Ação permitida apenas para contas com saldo zerado.</strong></p>';
            echo '<p>Caso sua conta esteja com saldo positivo ou negativo, a ação é rejeitada.<p>';
        }
    }
    
    public function depositar($deposito) {
        $this->saldoConta += $deposito;
        echo "Depósito realizado com sucesso, novo saldo: " . $this->getSaldoConta() . ".";
    }
    
    public function sacar($sacar) {
        if($this->saldoConta >= $sacar){
            $this->saldoConta -= $sacar;
            echo "Saque realizado com sucesso, novo saldo: " .$this->getSaldoConta() . ".";
        } else {
            echo 'Seu saldo é insulficiente para esta ação!';
        }
    }
    
    public function pagarMensal() {
        if(date('d') == '07'){
            $this->saldoConta -= 15.90;
        }
    }


    public function getNumeroConta() {
        return $this->numeroConta;
    }

    public function getTipoConta() {
        return $this->tipoConta;
    }

    public function getDonoConta() {
        return $this->donoConta;
    }

    public function getSaldoConta() {
        return $this->saldoConta;
    }

    public function getStatusConta() {
        return $this->statusConta;
    }

    public function setNumeroConta($numeroConta): void {
        $this->numeroConta = $numeroConta;
    }

    public function setTipoConta($tipoConta): void {
        $this->tipoConta = $tipoConta;
    }

    public function setDonoConta($donoConta): void {
        $this->donoConta = $donoConta;
    }

    public function setSaldoConta($saldoConta): void {
        $this->saldoConta = $saldoConta;
    }

    public function setStatusConta($statusConta): void {
        $this->statusConta = $statusConta;
    }
}
