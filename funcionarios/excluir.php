<?php

include_once('../bd/conectar.php');

$cpf = $_GET['cpf'];
$computador_id = $_GET['computador_id'];
$computador_id_home = $_GET['computador_id_home'];

$sql = "UPDATE tb_computador SET status = 'Inativo', situacao = 'Reserva' WHERE id = '$computador_id'";
$resultado = mysqli_query($strcon, $sql);

$sql = "UPDATE tb_computador SET status = 'Inativo', situacao = 'Reserva' WHERE id = '$computador_id_home'";
$resultado = mysqli_query($strcon, $sql);

$sql = "DELETE FROM tb_funcionario WHERE cpf = '$cpf'";
$resultado = mysqli_query($strcon, $sql);
header("Location: index.php");
exit();
