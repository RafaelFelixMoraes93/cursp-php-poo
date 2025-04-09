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
            $c1 = new Caneta();
            //$c1->setModelo("Bic");
            $c1->modelo = "Bic";//pode ser feito por ser publico
            $c1->setPonta("0.5");
            //$c1->ponta = "0.5"; não pode ser feito, pois esta como privado
            echo "Eu tenho uma caneta {$c1->getModelo()} de ponta{$c1->getPonta()}.";
        ?>
        </pre>
    </body>
</html>