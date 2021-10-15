<?php
    session_start();

    if(isset($_SESSION['usuario']) && is_array($_SESSION['usuario'])) {
        $nivel = $_SESSION[1];
        $matricula = $_SESSION[0];
    } else {
        header["location: ../index.php"];
    }

    if($nivel == 0) {
        header["location: ../Frontend/listaChamadoUsuario.php"];
    } elseif($nivel == 1) {
        header["location: ../Frontend/listaChamadoAnalista.php"];
    } else {
        header["location: ../Frontend/gerenciarSistema.php"];
    }
?>