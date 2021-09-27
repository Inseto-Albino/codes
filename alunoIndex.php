<?php

require_once 'connect.php';
require_once 'C:/xampp/htdocs/NovoSiga/alunoDao/AlunoDaoMysql.php';


$movDao = new AlunoDaoMysql($pdo);
$lista = $movDao->findAll();


?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<link rel="stylesheet" href="http://localhost/NovoSiga/geralCodes/style.php">
<a href="http://localhost/NovoSiga/geralCodes/index.php">Voltar</a><br><br>
<a href="addAluno.php">Adicionar Aluno</a><br><br>

<?php foreach ($lista as $aluno):?>
<table border="1" width="40%">
    <tr>
        Aluno <?=$aluno->getId();?>     
    </tr>
    <a href="updateAluno.php?id=<?=$aluno->getId();?>"> [Editar]  </a>
    <a href="deleteAluno.php?id=<?=$aluno->getId();?>">  [Excluir]</a>
    <tr>
        <td><?=$aluno->getNome();?></td>    
    </tr>
    <tr>
        <td><?=$aluno->getCurso();?></td>    
    </tr>
    <tr>
        <td>Turma <?=$aluno-> getTurma();?></td>
    </tr>
</table><br>
<?php endforeach; ?>
</div>
</div>
<br><br><br>
