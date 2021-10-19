<?php
include_once 'conexao.php';

$matricula = $_POST['mat'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$departamento = $_POST['departamento'];
$senha = $_POST['senha'];

if(isset($matricula) && isset($nome) && isset($email) && isset($telefone) && isset($departamento) && isset($senha)) {
    $query = $conn->prepare();
    $query->execute();
}


?>