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
            
            require_once 'Onibus.php';
            $onibus = new Onibus("Mercedes Benz", "Padron eO500U", 2025, 0);
            echo '<p><strong>Objeto Onibus</strong></p>';
            print_r($onibus);
            
            require_once 'CaixaDeSom.php';
            $caixadesom =new CaixaDeSom("Phillips", "D577f", "Preto", 0);
            echo '<p><strong>Objeto Caixa de Som</strong></p>';
            $caixadesom->aumentarVolume();
            print_r($caixadesom);
        ?>
        </pre>
    </body>
</html>