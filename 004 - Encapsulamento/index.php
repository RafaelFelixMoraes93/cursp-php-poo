<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Encapsulamento - POO</title>
    </head>
    <body>
        <pre>
        <?php
            echo '<h1>Projeto Controle Remoto</h1>';
            //Todos os atributos devem ser privados.
            // classe NomeDaClasse implementa Interface
            require_once 'ControleRemoto.php';
            $controle = new ControleRemoto();
            $controle->ligar();
            $controle->play();
            $controle->maisVolume();
            $controle->abrirMenu();
        ?>
        </pre>
    </body>
</html>