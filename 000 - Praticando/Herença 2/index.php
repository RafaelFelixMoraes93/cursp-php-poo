<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Herança</title>
    </head>
    <body>
        <?php
            require_once 'SerInterface.php';
            require_once 'Ser.php';
            require_once 'Mago.php'; 
            require_once 'MagoMestre.php';
            
            echo "<h1>Mago</h1>";
            $mago = new Mago("Pedro", "50", "100");
            $mago->exebirFicha();
            
            echo "<h1>Mago Mestre</h1>";
            $magomestre = new MagoMestre("Merlin", 100, 200);
            $magomestre->exebirFicha();
        ?>
    </body>
</html>