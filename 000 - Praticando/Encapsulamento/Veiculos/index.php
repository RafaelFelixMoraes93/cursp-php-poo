<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Encapsulamento - POO</title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Carro.php';
            $carro = new Carro("Fusion", "2010", "Preto", "4584955 ");
            echo '<h1>Exemplo de uma carro</h1>';           
            $carro->exibirFicha();
            
            echo '<p>Tentando acelerar carro desligado</p>';
            $carro->aceletar();
            $carro->exibirFicha();
            
            echo '<p>Ligando carro e acelerando</p>';
            $carro->ligar();
            $carro->aceletar();
            $carro->exibirFicha();
            
            echo '<p>Tentando desligar carro em movimento</p>';
            $carro->desligar();
            $carro->exibirFicha();
        ?>
        </pre>
    </body>
</html>