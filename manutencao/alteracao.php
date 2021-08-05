<?php


include_once('../bd/conectar.php');
include_once('../functions/limpaCampos.php');

$id = $_GET['id'];
$computador_id = $_POST['computador_id'];
$local = $_POST['local'];
$status = $_POST['status'];
$descricao = $_POST['descricao'];

if ($status == "Finalizada") {
    /* atualizando o status e situação do computador */
    $sql = "UPDATE tb_computador SET status = 'Inativo',situacao = 'Reserva'  WHERE id = '$computador_id'";
    $resultado = mysqli_query($strcon, $sql);
}

$sql = "UPDATE tb_manutencao SET local = '$local', status = '$status', descricao = '$descricao' WHERE id = '$id'";
$resultado = mysqli_query($strcon, $sql);

header("Location: index.php");
exit();
