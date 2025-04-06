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
            $c1->modelo = "Bic";
            $c1->cor = "Azul";
            $c1->ponta = 0.5;
            $c1->carga = 50;
            $c1->tampada = false;  
            print_r($c1);
            $c1->destampar();
            $c1->rabiscar();
            
            $c2 = new Caneta();
            $c2->modelo = "Bic";
            $c2->cor = "Verde";
            $c2->ponta = 0.5;
            $c2->carga = 50;
            $c2->tampar();
            print_r($c2);
            $c2->rabiscar();
        ?>
        </pre>
    </body>
</html>