<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>RPG</title>
    </head>
    <body>
        <?php
            require_once 'Humano.php';
            require_once 'Mago.php';
            require_once 'Guerreiro.php';
            require_once 'Arqueiro.php';
            require_once 'FuncoesInterface.php';
            require_once 'Espada.php';
            require_once 'Elmo.php';
            require_once 'Armaduras.php';
            require_once 'Escudo.php';
            require_once 'Pernas.php';
            require_once 'HealthPotion.php';
            require_once 'ManaPotion.php';
            
            // Espadas
            $knife = new Espada("Knife", 5);
            
            // Escudos
            $escudoDeMadeira = new Escudo("Escudo de Madeira", 5);
            
            // Pernas
            $pernasDePano = new Pernas("Pernas de Pano", 1);
            
            // Armaduras
            $armaduraDePano = new Armadura("Armadura de Pano", 1);
            
            // ManaPotions
            $manaPotion = new ManaPotion("Mana Potion", 50);
            
            // HealthPotions
            $healthPotion = new HealthPotion("Health Potion", 50);
            
            // Elmos
            $elmoDeMadeira = new Elmo("Elmo de Madeira", 2);
            
            
            
        ?>
    </body>
</html>
