<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Polimorfismo - Sobreposição</title>
    </head>
    <body>
        <pre>
        <?php        
        require_once 'AnimalPoli.php';
        require_once 'MamiferoPoli.php';
        require_once 'ReptilPoli.php';
        require_once 'PeixePoli.php';
        require_once 'AvePoli.php';
        require_once 'CanguruPoli.php';
        require_once 'CachorroPoli.php';
        require_once 'CobraPoli.php';
        require_once 'TartarugaPoli.php';
        require_once 'GoldFishPoli.php';
        require_once 'AraraPoli.php';
        
        echo "<h1>Polimorfismo de Sobreposição</h1>";
        echo "<p><strong>Mesma Assinatura</strong></p>";
        echo "<hr>";
        
        echo "<h1>Mamífero</h1>";
        $mamifero = new MamiferoPoli();
        $mamifero->locomover();
        $mamifero->emitirSom();
        
        echo "<h1>Ave</h1>";
        $ave = new AvePoli();
        $ave->locomover();
        $ave->emitirSom();
        
        echo "<h1>Reptil</h1>";
        $reptil = new ReptilPoli();
        $reptil->locomover();
        $reptil->emitirSom();
        
        echo "<h1>Canguru</h1>";
        $canguru = new CanguruPoli();
        $canguru->locomover();
        $canguru->emitirSom();
        
        echo "<h1>Cachorro</h1>";
        $cachorro = new CachorroPoli();
        $cachorro->locomover();
        $cachorro->emitirSom();        
        echo "<h1>Tartaruga</h1>";
        $tartaruga = new TartarugaPoli();
        $tartaruga->locomover();
        $tartaruga->emitirSom();
        echo "<hr>";
        ?>
        </pre>
    </body>
</html>
