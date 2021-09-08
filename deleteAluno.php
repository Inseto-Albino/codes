<?php

require 'connect.php';
require_once 'dao/AlunoDaoMysql.php';

$alunoDao = new AlunoDaoMysql($pdo);

$id = filter_input(INPUT_GET, 'id');

if($id) {
    $alunoDao->deleteAluno($id);
}

header("Location: index.php");
exit;

