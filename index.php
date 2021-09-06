<?php

require_once 'connect.php';
require_once 'dao/AlunoDaoMysql.php';


$movDao = new AlunoDaoMysql($pdo);
$lista = $movDao->findAll();


?>


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
        <td><?=$aluno->getTurma();?></td>
    </tr>
</table><br>
<?php endforeach; ?>
<br><br><br>
