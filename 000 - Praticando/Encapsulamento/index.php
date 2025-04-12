<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Encapsulamento - POO</title>
    </head>
    <body>
        <pre>
        <?php            
            require_once 'Cachorro.php';
            $cachorro = new Cachorro("Rex", "Vira Lata", "Caramelo");
            echo '<h1>Teste Encapsulamento Cachorro</h1>';
            $cachorro->exibirFicha();
            echo "<br><strong>Testando som</strong>";
            $cachorro->emitirSom();
            echo '<br><strong>Testando comer</strong>';
            $cachorro->comer();
            
            $cachorro->exibirFicha();
            
        ?>
        </pre>
    </body>
</html>