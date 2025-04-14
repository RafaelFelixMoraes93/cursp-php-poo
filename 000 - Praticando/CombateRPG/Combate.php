<?php

class Combate {
    private $personagem;
    private $inimigo;

    public function getPersonagem() {
        return $this->personagem;
    }

    public function getInimigo() {
        return $this->inimigo;
    }

    public function setPersonagem($personagem) {
        $this->personagem = $personagem;
    }

    public function setInimigo($inimigo) {
        $this->inimigo = $inimigo;
    }

    public function lutaPermitida(): bool {
        return $this->personagem->estaVivo() && $this->inimigo->estaVivo();
    }

    public function iniciarCombate() {
        if (!$this->lutaPermitida()) {
            echo "A luta não é permitida. Um dos combatentes está morto.<br>";
            return;
        }

        echo "<h3>Início do Combate!</h3>";
        $round = 1;

        while ($this->personagem->estaVivo() && $this->inimigo->estaVivo()) {
            echo "<h4>Round $round</h4>";

            $dano = $this->personagem->ataque() - $this->inimigo->defesa();
            $dano = max(0, $dano);
            $vidaInimigo = $this->inimigo->getVida() - $dano;
            $this->inimigo->setVida(max(0, $vidaInimigo));
            echo "{$this->personagem->getNome()} ataca {$this->inimigo->getNome()} e causa {$dano} de dano!<br>";

            if (!$this->inimigo->estaVivo()) {
                echo "{$this->inimigo->getNome()} foi derrotado!<br>";
                break;
            }

            $dano = rand(0, $this->inimigo->ataque()) - rand(0, $this->personagem->defesa());
            $dano = $dano < 0 ? 0 : $dano;
            $vidaPersonagem = $this->personagem->getVida() - $dano;
            $this->personagem->setVida(max(0, $vidaPersonagem));
            echo "{$this->inimigo->getNome()} ataca {$this->personagem->getNome()} e causa {$dano} de dano!<br>";

            if (!$this->personagem->estaVivo()) {
                echo "{$this->personagem->getNome()} foi derrotado!<br>";
                break;
            }

            echo "<hr>";
            $round++;
        }

        if ($this->personagem->estaVivo()){
            echo "<hr>";
            echo "<h3>Combate Encerrado!</h3>";
            echo "<hr>";
        $this->personagem->exibirFicha();       
        } else {
            echo "<hr>";
            echo "<h2>Você foi derrotado, fim de jogo!<h2>";
            echo "<hr>";
        }
    }
}
