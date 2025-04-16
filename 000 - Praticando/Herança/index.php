<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Herança</title>
    </head>
    <body>
        <?php
        require_once 'Animal.php';
        require_once 'Cachorro.php';
        $cachorro = new Cachorro("Rex", "Vira Lata", 3, "Caramelo");
        $cachorro->exibirFicha();
        $cachorro->caminhar();
        echo '<hr>';
        $cachorro->comer();
        echo '<hr>';
        $cachorro->emitirSom();
        echo '<hr>';
        ?>
    </body>
</html>
