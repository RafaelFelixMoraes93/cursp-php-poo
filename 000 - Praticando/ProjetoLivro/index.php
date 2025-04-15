<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Projeto Livro</title>
    </head>
    <body>
        <pre>
        <?php        
        require_once 'Livro.php';
        require_once 'Pessoa.php';
        
        $pessoa = new Pessoa("Pedro Felix", 8, "M");
        
        $livro[0] = new Livro("A Sociedade do Anel (The Fellowship of the Ring)", "J.R.R. Tolkien", 576, $pessoa);
        $livro[1] = new Livro("As Duas Torres (The Two Towers)", "J.R.R. Tolkien", 448, $pessoa);
        $livro[2] = new Livro("O Retorno do Rei (The Return of the King)", "J.R.R. Tolkien", 464, $pessoa);
        
        echo "<h1>Lendo Livros</h1>";
        $livro[0]->detalhar();
        
        echo "<h2>Abrindo livro</h2>";
        $livro[0]->abrir();
        $livro[0]->detalhar();
        
        echo "<h2>Colocando na página 200</h2>";
        $livro[0]->folhear(200);
        $livro[0]->detalhar();
        
        echo "<h2>Avançando página</h2>";
        $livro[0]->avancarPagina();
        $livro[0]->detalhar();
        
        echo "<h2>Fechando livro</h2>";
        $livro[0]->fechar();
        $livro[0]->detalhar();
        
        echo "<h2>Tentando avançar página com livro fechado</h2>";
        $livro[0]->avancarPagina();
        $livro[0]->detalhar();
        
        echo "<h2>Reabrindo livro e avançando página</h2>";
        $livro[0]->abrir();
        $livro[0]->avancarPagina();
        $livro[0]->detalhar();
        
        echo "<h2>Indo para ultima página</h2>";
        $livro[0]->folhear(576);
        $livro[0]->detalhar();
        
        echo "<h2>Tentando ultrapassar a ultima página</h2>";
        $livro[0]->avancarPagina();
        $livro[0]->detalhar();
        ?>
        </pre>
    </body>
</html>
