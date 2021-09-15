<?php
require_once 'connect.php';
require_once 'C:/xampp/htdocs/NovoSiga/models/Aluno.php';
require_once 'C:/xampp/htdocs/NovoSiga/dao/AlunoDaoMysql.php';


$alunoDao = new AlunoDaoMysql($pdo);


$nomeDescription = filter_input(INPUT_POST, 'nome');
$turmaDescription = filter_input(INPUT_POST, 'turma');
$cursoDescription = filter_input(INPUT_POST, 'curso');


if ($nomeDescription  && $turmaDescription && $cursoDescription){
    $aluno = new Aluno();
    $aluno->setNome($nomeDescription);
    $aluno->setTurma($turmaDescription);
    $aluno->setCurso($cursoDescription);


    $alunoDao->addAluno($aluno);   

    header ("Location: ".$base);
    exit;
}
header("Location: codes/addAluno.php");
exit;


?>


