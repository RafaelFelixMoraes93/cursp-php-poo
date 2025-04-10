<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Banco - POO</title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Cliente.php';
        $clientejoao = new Cliente("15493-1", "CC", "João Otávio", 0.0);
        echo "<h2>Olá, Seja Bem Vindo(a) ao banco Zen " . $clientejoao->getDonoConta() . ".</h2><br>";
        print_r($clientejoao);

        echo '<h2>Utilizando função depositar (500.99)</h2>';
        echo "Saldo: " . $clientejoao->getSaldoConta() . ".<br>";
        $clientejoao->depositar(500.99) . "<br>";        
        
        echo '<h2>Utilizando função sacar (100.00)</h2>';
        echo "Saldo: " . $clientejoao->getSaldoConta() . ".<br>"; 
        $clientejoao->sacar(100.00);
        
        echo '<h2>Utulizando função fechar conta (apenas se o valor estiver zerado).</h2>';
        $clientejoao->fecharConta();
        echo '<h2>Zerando saldo para tentar novamente.</h2>';
        $clientejoao->sacar(400.99);
        $clientejoao->fecharConta();
        
        echo '<h2>Reabindo conta.</h2>';
        $clientejoao->abrirConta();
        ?>
        </pre>
    </body>
</html>