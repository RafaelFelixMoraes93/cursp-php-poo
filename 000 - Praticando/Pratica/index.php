<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Praticando - POO</title>
    </head>
    <body>
        <pre>
        <?php
            echo '<h1>Exemplos de Objetos</h1>';
            
            require_once 'Carro.php';
            $carro = new Carro("Camaro", 1975, "Preto");                        
            echo '<p><strong>Objeto Carro</strong></p>';
            print_r($carro);
            
            require_once 'Pessoa.php';
            $pessoa = new Pessoa("Pedro", 21, "99.999.999-3", "999.999.999.99");
            echo '<p><strong>Objeto Pessoa</strong></p>';
            print_r($pessoa);
            
            require_once 'Televisao.php';
            $televisao = new Televisao("Phillips", 2025);
            echo '<p><strong>Objeto Televisão</strong></p>';
            print_r($televisao);
            
        ?>
        </pre>
    </body>
</html>