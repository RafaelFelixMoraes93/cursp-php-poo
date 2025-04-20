<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Comendo</title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Comilao.php';
            require_once 'Comida.php';
            echo "<h1>Adicionando peso</h1>";
            
            echo "<p>Hamburguer 250g</p>";
            $comida = new Comida("Hamburguer", 0.250);
            $comilao = new Comilao("João", 80.5);
            print_r($comilao);
            $comilao->comer($comida);
            print_r($comilao);
        ?>
        </pre>
    </body>
</html>
