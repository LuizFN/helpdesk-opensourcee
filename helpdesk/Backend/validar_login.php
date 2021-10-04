<?php
include_once 'classLogin.php'

$matricula = $_POST['mat'];
$senha = $_POST['senha'];

if (!empty($_POST) AND (empty($_POST['matricula']) OR empty($_POST['senha']))) {
    header("Location: index.php"); exit;
?>
}