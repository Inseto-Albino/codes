<?php
require_once 'connect.php';
require_once 'models/Aluno.php';
require_once 'dao/AlunoDaoMysql.php';

$alunoDao = new AlunoDaoMysql($pdo);
$info = false;
$id = filter_input(INPUT_GET, 'id');

if ($id) {
    $info = $alunoDao->findById($id);
}
else {
    header("Location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="updateAluno_action.php">
    <input type="hidden" name="id" value="<?=$info->getId();?>">
    <label>
        Pergunta: 
        <input type="text" name="aluno" value="<?=$info->getAluno();?>">
    </label><br><br>
    <label>
        Resposta: 
        <input type="text" name="aluno" value="<?=$info->getAluno();?>">
    </label><br><br>
  
    <input type="submit" value="Salvar">

</form>
</body>
</html>

