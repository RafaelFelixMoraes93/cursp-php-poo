<?php
require_once 'LoboSobre.php';
class CachorroSobre extends LoboSobre{
    
    #[\Override]
    public function emitirSom() {
        echo "<p>Au! Au! Au!</p>";
    }
    
    public function reagirFrase($frase) {
        if($frase == "Bom dia"){
            echo "<p>Abana o rabo</p>";
        } else {
            echo "<p>Continua deitado</p>";
        }
    }
    
    public function reagirHora($hora) {
        if($hora < 12) {
            echo "<p>Abanar</p>";
        } elseif ($hora >= 18) {
            echo "<p>Ignorar</p>";
        } else {
            echo "<p>Abanar e Latir</p>";
        }
    }
    
    public function reagirDona($dono) {
        echo "</p>Reagiu ao dono {$dono}</p>";
    }
    
    public function reagirIdadePeso($idade, $peso) {
        if($idade <= 5) {
            if($peso < 10) {
                echo "<p>Abanar</p>";
            } else {
                echo "<p>Latir</p>";
            }
        } else {
            if($peso < 10) {
                echo "<p>Rosnar</p>";
            } else {
                echo "<p>Ignorar</p>";
            }
    }
    }
}
