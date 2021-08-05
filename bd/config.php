<?php
try {

    $conexao = new PDO("mysql:host=localhost;port=3306;dbname=db_ea_cmequip", "root", "");
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexao->exec("SET NAMES UTF8");
} catch (PDOException $e) {
    echo "Falha ao conectar com o Banco de Dados: " . $e->getMessage();
}
