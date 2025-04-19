<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Polimorfismo - Sobrecarga</title>
    </head>
    <body>
        <?php
        require_once 'AnimalSobre.php';
        require_once 'MamiferoSobre.php';
        require_once 'LoboSobre.php';
        require_once 'CachorroSobre.php';
        
        echo "<h1>Polimorfismo de Sobrecarga</h1>";
        echo "<p><strong>Assinaturas Diferentes</strong></p>";
        echo "<p><strong>Não existe em PHP</strong></p>";
        echo "<hr>";
        
        echo "<h1>Mamífero</h1>";
        $mamifero = new MamiferoSobre();
        $mamifero->emitirSom();
        
        echo "<h1>Cachorro</h1>";
        $cachorro = new CachorroSobre();
        $cachorro->emitirSom();
        $cachorro->reagirDona("Pedro");
        $cachorro->reagirFrase("Bom dia");
        $cachorro->reagirIdadePeso(9, 15);
        
        echo "<h1>Lobo</h1>";
        $lobo = new LoboSobre();
        $lobo->emitirSom();
        
        echo "<hr>";
        ?>
    </body>
</html>
