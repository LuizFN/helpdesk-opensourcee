<?php
if (!empty($_POST) AND (empty($_POST['matricula']) OR empty($_POST['senha']))) {
    header("Location: index.php"); exit;
}

$conn = mysqli_connect('localhost', 'root', '', 'db_helpdesk');



$matricula = $_POST['matricula'];
$senha = $_POST['senha'];

$sql = "SELECT `matricula`, `nome`, `nivel` FROM `usuarios` WHERE (`matricula` = '".$matricula ."') AND (`senha` = '". sha1($senha) ."') AND (`ativo` = 1) LIMIT 1";
$query = mysqli_query($sql);

if (mysql_num_rows($query) != 1) {
    echo "Login inválido!"; exit;
} else {
    $resultado = mysql_fetch_assoc($query);

    $resultado = mysql_fetch_assoc($query);

    if (!isset($_SESSION)) session_start();

    $_SESSION['matricula'] = $resultado['matricula'];
    $_SESSION['UsuarioNome'] = $resultado['nome'];
    $_SESSION['UsuarioNivel'] = $resultado['nivel'];

    header("Location: frontend/home.php"); exit;
    }
?>