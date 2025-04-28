<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Ímpar ou Par</title>
    </head>
    <body>
        <?php
        echo "<h1>Ímpar ou par</h1>";
        (int)$numero = 11 % 2;
        
        if($numero == 0) {
            echo "Par<br>";
        } else {
            echo "Ímpar<br>";
        }
        
        echo "<h1>Números pares de 1 a 50</h1>";
        for($i=0; $i<=50; $i++){
            if($i % 2 == 0){
                echo "{$i} - ";
            }
        }
        
        echo "<h1>Somando todos os número de 1 a 10</h1>";
        $total =0;
        for($x=0; $x<=10; $x++){
            $total +=$x;
            echo "{$total} - ";
        }
        
        echo "<h1>Positivo, Negativo ou Zero</h1>";
        $valor = -5;
        if($valor == 0){
            echo "<p>O número é zero!</p>";
        } elseif($valor <0){
            echo "<p>{$valor} é um número negativo!</p>";    
        } else {
            echo "{$valor} é um número positivo!";
        }
        
        echo "<h1>Ordenando números</h1>";
        $numero1[0] = 5;
        $numero1[1] = 10;
        $numero1[2] = 1;
        
        echo "Número1= 5";
        echo "Número1= 10";
        echo "Número1= 1";
        
        echo "<p>Aplicando Ordenação</p>";
        sort($numero1);
        print_r($numero1);
        ?>
    </body>
</html>
