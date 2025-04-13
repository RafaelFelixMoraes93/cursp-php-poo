<?php
require_once 'Lutador.php';
class Luta {
    private $desafiado;
    private $desafiante;
    private int $rounds;
    private bool $aprovada;
    
    public function getDesafiado() {
        return $this->desafiado;
    }

    public function getDesafiante() {
        return $this->desafiante;
    }

    public function getRounds(): int {
        return $this->rounds;
    }

    public function getAprovada(): bool {
        return $this->aprovada;
    }

    public function setDesafiado($desafiado): void {
        $this->desafiado = $desafiado;
    }

    public function setDesafiante($desafiante): void {
        $this->desafiante = $desafiante;
    }

    public function setRounds(int $rounds): void {
        $this->rounds = $rounds;
    }

    public function setAprovada(bool $aprovada): void {
        $this->aprovada = $aprovada;
    }

        
    public function marcarLuta($lutador1, $lutador2) {
        if($lutador1->getCategoria() == $lutador2->getCategoria() && $lutador1 != $lutador2) {
            $this->aprovada = true;
            $this->desafiado = $lutador1;
            $this->desafiante = $lutador2;
            echo 'Luta marcada com Sucesso!';
        } else {
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
            echo 'Erro ao marcar luta!';
        }
    }
    
    public function lutar() {
        if($this->aprovada) {
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            
            $vencedor = rand(0, 2);
            switch ($vencedor) {
                case 0:
                    echo '<p>Empate<p>';
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1:
                    echo "<p>" . $this->desafiado->getNome() . " venceu!" ."</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2:
                    echo "<p>" . $this->desafiante->getNome() . " venceu!" ."</p>";                    
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                    break;
                default :                    
                    break;
            }
            
        } else {
            echo '<p>Luta não pode acontecer!</p>';
        }
    }
}
