<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<link rel="stylesheet" href="http://localhost/NovoSiga/geralCodes/style.php">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="addAluno_action.php">
    <label>
        Aluno: 
        <input type="text" name="nome">
    </label><br><br>
    <label>
        Curso: 
        <input type="text" name="curso">
    </label><br><br>
    <label>
        Turma: 
        <input type="text" name="turma">
    </label><br><br>
  
    <input type="submit" value="Adicionar">
    <br>
    <a href="alunoIndex.php">Voltar</a>

</form>
</body>
</html>

