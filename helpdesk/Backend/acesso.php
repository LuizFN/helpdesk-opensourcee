<?php
    include_once 'validar_login.php';
    session_start();

    if(isset($_SESSION['usuario']) && is_array($_SESSION['usuario'])) {
        $nivel = $_SESSION['usuario'][1];
        $matricula = $_SESSION['usuario'][0];
    } else {
        header("location: ../index.php");
    }
    if($nivel == 0) {
        header("location: ../Frontend/listaChamadoUsuario.php");
    } else if($nivel == 1) {
        header("location: ../Frontend/listaChamadoAnalista.php");
    } else if($nivel == 2) {
        header("location: ../Frontend/gerenciarSistema.php");
    }
?>
