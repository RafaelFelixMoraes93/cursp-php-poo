<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Combate RPG</title>
    </head>
    <body>
        <pre>
        <?php
        echo '<h1>Simulação básica de combate</h1>';
        require_once 'Personagem.php';
        require_once 'Rato.php';
        require_once 'Combate.php';
        $personagem = new Personagem("Bigodão", 10, 10);
        $rato = new Rato("Rato");
        $combate = new Combate();
        
        $personagem->exibirFicha();
        $rato->exibirFicha();
        
        $combate->setPersonagem($personagem);
        $combate->setInimigo($rato);
        if ($combate->lutaPermitida()){
            $combate->iniciarCombate();
        } else {
            $combate->lutaPermitida();
        }
        
        
        
        ?>
        </pre>
    </body>
</html>
