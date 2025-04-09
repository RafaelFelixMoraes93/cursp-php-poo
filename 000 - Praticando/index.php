<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 02 - POO</title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Caneta.php';
            $c1 = new Caneta("Bic", "Azul", 0.5);   
            $c2 = new Caneta("Bic", "Preta", 0.5);
            //$c1->setModelo("Bic");
            //$c1->modelo = "Bic";//pode ser feito por ser publico
            //$c1->setPonta("0.5");
            
            echo '<p>Primera Caneta</p>';
            print_r($c1);
            echo '<p>Segunda Caneta</p>';
            print_r($c2);
        ?>
        </pre>
    </body>
</html>