<?php
require_once 'connect.php';
require_once 'models/Aluno.php';
require_once 'dao/AlunoDaoMysql.php';


$alunoDao = new AlunoDaoMysql($pdo);


$nomeDescription = filter_input(INPUT_POST, 'nome');
$turmaDescription = filter_input(INPUT_POST, 'turma');



if ($nomeDescription && $turmaDescription){
    $aluno = new Question();
    $aluno->setNome($nomeDescription);
    $aluno->setTurma($turmaDescription);


    $alunoDao->addAluno($aluno);   

    header ("Location: ".$base);
    exit;
}
header("Location: addAluno.php");
exit;


?>


