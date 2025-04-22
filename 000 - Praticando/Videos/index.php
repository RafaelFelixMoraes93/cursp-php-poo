<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Vídeo</title>
    </head>
    <body>
        <pre>
        <?php            
            require_once 'Video.php';
            require_once 'AcoesVideoInterface.php';
            require_once 'PessoaVideo.php';
            require_once 'Gafanhoto.php';
            require_once 'Visualizacao.php';
            
            echo "<hr>";
            echo "<h1>Exercícios Vídeo</h1>";
            echo "<hr>";
            
            echo "<h1>Video</h1>";
            $video[0] = new Video("Aula 01 de POO");
            $video[1] = new Video("Aula 12 de PHP");
            $video[2] = new Video("Aula 15 de HTML5");
            
            print_r($video[0]);
            print_r($video[1]);
            print_r($video[2]);
            
            echo "<hr>";
            
            echo "<h1>Gafanhoto</h1>";
            $pessoa = new Gafanhoto("Pedro", 9, "M", "juba");
            print_r($pessoa);

            $pessoa2 = new Gafanhoto("Maria", 25, "F", "mari");
            print_r($pessoa2);
            
            echo "<hr>";
            
            echo "<h1>Objetos Interagindo</h1>";
            
            $visualizacao1 = new Visualizacao($pessoa, $video[0]);
            print_r($visualizacao1);
            echo "<hr>";
            $visualizacao2 = new Visualizacao($pessoa, $video[1]);
            print_r($visualizacao2);
            echo "<hr>";
            $visualizacao3 = new Visualizacao($pessoa, $video[2]);
            print_r($visualizacao3);
            
            $visualizacao1->avaliarNota(5);
            print_r($visualizacao1);
            $visualizacao1->avaliarPorcentagem(85);
            print_r($visualizacao1);
            
            
            echo "<hr>";
        ?>
        </pre>
    </body>
</html>
