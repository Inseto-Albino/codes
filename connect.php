<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "novosiga";

// Create connection
$connect = new mysqli($servername, $username, $password);

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

// Create database
$sql = "CREATE DATABASE " .$dbname;

$connect = new mysqli($servername, $username, $password, $dbname);

$base = 'http://localhost/NovoSiga/codes';


$pdo = new PDO("mysql:dbname=".$dbname.";host=".$servername, $username, $password);

$sql2 = "CREATE TABLE novosiga (
    id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(80) NOT NULL,
    turma VARCHAR(50) NOT NULL,
    curso VARCHAR(50) NOT NULL,
    reg_date TIMESTAMP
  )";
