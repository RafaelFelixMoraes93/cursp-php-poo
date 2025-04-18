<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Herança com Abstração</title>
    </head>
    <body>
        <pre>
        <?php
       require_once 'Visitante.php';
       require_once 'Aluno.php';
       require_once 'Bolsista.php';
       require_once 'Professor.php';
       require_once 'Tecnico.php';
       
       echo "<h1>Classe pobre</h1>";
       $visitante = new Visitante();
       $visitante->setNome("Pedro");
       $visitante->setIdade(8);
       $visitante->setSexo("M");
       print_r($visitante);
       
       echo "<h1>Classe com herança para diferença</h1>";
       echo "<p><strong>Herda da classe mãe, mas tem seus atributos adicionais</strong></p>";
       $aluno = new Aluno();
       $aluno->setNome("João");
       $aluno->setMatricula(11111);
       $aluno->setIdade(16);
       $aluno->setSexo("M");
       $aluno->setCurso("Informática");
       print_r($aluno);
       $aluno->pagarMensalidade();
       
       echo "<h1>Classe com herança para diferença (sobrepondo método pagar mensalidade)</h1>";
       echo "<p><strong>Não é possível sobrepor um método FINAL</strong></p>";
       $bolsista = new Bolsista();
       $bolsista->setMatricula(11112);
       $bolsista->setNome("Cláudio");
       $bolsista->setBolsa(12.5);
       $bolsista->setCurso("Administração");
       $bolsista->setIdade(17);
       print_r($bolsista);
       $bolsista->pagarMensalidade();
       
       echo "<h1>Classe com herança para diferença</h1>";
       $professor = new Professor();
       $professor->setNome("Getulio");
       $professor->setSexo("M");
       $professor->setIdade(52);
       $professor->setEspecialidade("POO");
       $professor->setSalario(3900.99);
       $professor->receberAumento(370.00);
       print_r($professor);
       
       echo "<h1>Classe com herança para diferença</h1>";
       $tecnico = new Tecnico();
       $tecnico->setNome("Kleber");
       $tecnico->setSexo("M");
       $tecnico->setIdade(29);
       $tecnico->setRegistoProfissional("571964-z");
       $tecnico->setSalario(2800.55);
       print_r($tecnico);
       $tecnico->praticar();       
        ?>
        </pre>
    </body>
</html>
