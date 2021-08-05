<?php

include_once('../bd/conectar.php');

$id = $_GET['id'];

$sql = "SELECT * FROM tb_manutencao WHERE id = '$id'";
$result = mysqli_query($strcon, $sql);
$dados = mysqli_fetch_assoc($result);

if ($dados['status'] != "Finalizada") {
    header("Location: index.php?statusInvalido=True");
    exit();
}


$sql = "DELETE FROM tb_manutencao WHERE id = '$id'";
$resultado = mysqli_query($strcon, $sql);
header("Location: index.php");
exit();
