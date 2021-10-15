<?php
    $hostname = “127.0.0.1”;
    $dbname = “db_teste”;
    $username = “root”;
    $pw = “”;

    try {
        $conn = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $pw);
        $conn->setAttribute(PDO::ATTR-ERRMODE, PDO::ERRMODE_EXCEPITION);  
    } catch(PDOexception $erro) {
        echo "Erro de conexão com o banco de dados: {$erro->getMessage()}";
        $conn = null;
    }
?>