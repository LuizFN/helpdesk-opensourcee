<?php
include_once 'conexao.php'

if(isset($_POST['mat']) && isset($_POST['senha']) && $conn != null) {
    $query = $conn->prepare("SELECT * FROM usuarios WHERE matricula = ? AND senha = ?");
    $query->execute(array($_POST['mat'] . $_POST['senha']));

    if($query->rowCount()) {
        $usuario = $query->fetchAll(PDO::FETCH_ASSOC)[0];

            session_start();
            $_SESSION['usuario'] = array($usuario['matricula' . $usuario['nivel']]);
            header["location: acesso.php"];
    } else {
        header["location: ../index.php"];
    }
} else {
    header["location: ../index.php"];
}

?>