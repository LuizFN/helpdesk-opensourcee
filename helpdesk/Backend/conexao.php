<?php

class conn {

    try {
    $hostname = “”;
    $dbname = “”;
    $username = “”;
    $pw = “”;

    $pdo = new PDO (“mssql:host=$hostname;dbname=$dbname ”,”$username ”,”$pw ”);
    } catch (PDOException $e) {
    echo “Erro de Conexão ” . $e->getMessage() . “\n”;
    exit;
    }
}   
?>