<?php
require_once 'connect.php';
require_once 'dao/AlunoDaoMysql.php';


$alunoDao = new AlunoDaoMysql($pdo);


$alunoId = filter_input(INPUT_POST, 'id');
$nomeDescription = filter_input(INPUT_POST, 'nome');
$turmaDescription = filter_input(INPUT_POST, 'turma');



if ($nomeDescription && $turmaDescription){
    $aluno = $alunoDao->findById($alunoId);
    $aluno->setNome($nomeDescription);
    $aluno->setTurma($turmaDescription);

    $alunoDao->updateAluno($aluno);   

    header ("Location: index.php");
    exit;
}else {
    header("Location: updateAluno.php?id=".$alunoId);
exit;
}



?>
