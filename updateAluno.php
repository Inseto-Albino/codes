<?php
require_once 'connect.php';
require_once 'C:/xampp/htdocs/NovoSiga/alunoModels/Aluno.php';
require_once 'C:/xampp/htdocs/NovoSiga/alunoDao/AlunoDaoMysql.php';

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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<link rel="stylesheet" href="http://localhost/NovoSiga/geralCodes/style.php"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="updateAluno_action.php">
    <input type="hidden" name="id" value="<?=$info->getId();?>">
    <label>
        Aluno: 
        <input type="text" name="nome" value="<?=$info->getNome();?>">
    </label><br><br>
    <label>
        Curso: 
        <input type="text" name="curso" value="<?=$info->getCurso();?>">
    </label><br><br>
    <label>
        Turma: 
        <input type="text" name="turma" value="<?=$info->getTurma();?>">
    </label><br><br>
  
    <input type="submit" value="Salvar">

</form>
</body>
</html>

