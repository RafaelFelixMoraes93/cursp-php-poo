<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Herança</title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Pessoa.php';
        require_once 'Aluno.php';
        require_once 'Professor.php';
        require_once 'Funcionario.php';
        
        $pessoa[0] = new Pessoa;
        $pessoa[1] = new Aluno;
        $pessoa[2] = new Professor;
        $pessoa[3] = new Funcionario;
        
        $pessoa[0]->setNome("Pedro");
        $pessoa[0]->setIdade(20);
        $pessoa[0]->setSexo("M");
        
        
        $pessoa[1]->setNome("Joaquim");
        $pessoa[1]->setIdade(16);
        $pessoa[1]->setSexo("M");
        $pessoa[1]->setCurso("Php");
        $pessoa[1]->setMatricula(true);
        
        $pessoa[2]->setNome("Cládio");
        $pessoa[2]->setIdade(28);
        $pessoa[2]->setSexo("M");
        $pessoa[2]->setEspecialidade("Estruturas de Dados");
        $pessoa[2]->setSalario(5500.75);
        $pessoa[2]->receberAumento(1000.00);
        
        $pessoa[3]->setNome("Marcos");
        $pessoa[3]->setIdade(21);
        $pessoa[3]->setSexo("M");
        $pessoa[3]->setSetor("Estoque");
        $pessoa[3]->setTrabalhando(true);
        
        print_r($pessoa[0]);
        print_r($pessoa[1]);
        print_r($pessoa[2]);
        print_r($pessoa[3]);
        ?>
        </pre>
    </body>
</html>
