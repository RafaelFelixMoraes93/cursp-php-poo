<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Objetos Compostos</title>
    </head>
    <body>
        <pre>
        <?php
        echo '<h1>Real Combat</h1>';
        
        require_once 'Lutador.php';
        require_once 'Luta.php';
        $lutador[0] = new Lutador("Buakaw Banchamek", "Tailândia", 41, 1.74, "70");
        $lutador[1] = new Lutador("Saenchai Sor Kingstar", "Tailândia", 43, 1.66, "63.5");
        $lutador[2] = new Lutador("Dieselnoi Chor Thanasukarn", "Tailândia", 64, 1.88, "61");
        $lutador[3] = new Lutador("Yodsanklai Fairtex", "Tailândia", 38, 1.78, "70");
        $lutador[4] = new Lutador("Samart Payakaroon", "Tailândia", 61, 1.70, "58");
        $lutador[5] = new Lutador("Rodtang Jitmuangnon", "Tailândia", 26, 1.67, "61");
        
        echo '<h3>Primeira Luta</h3>';
        $luta = new Luta();
        $luta->marcarLuta($lutador[0], $lutador[1]);
        $luta->lutar();
        
        echo '<h3>Segunda Luta</h3>';
        $luta2 = new Luta();
        $luta->marcarLuta($lutador[4], $lutador[4]);
        $luta->lutar();
        ?>
        </pre>
    </body>
</html>
