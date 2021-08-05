<?php


include_once('../bd/conectar.php');
include_once('../functions/limpaCampos.php');

$id = $_GET['id'];

$data_aquisicao = $_POST['data_aquisicao'];
$tipo = $_POST['tipo'];
$descricao = $_POST['descricao'];
$status = $_POST['status'];
$situacao = $_POST['situacao'];


$sql = "UPDATE tb_equipamento SET data_aquisicao = '$data_aquisicao', tipo = '$tipo', descricao = '$descricao', status = '$status', situacao = '$situacao' WHERE id = '$id'";

$resultado = mysqli_query($strcon, $sql);

header("Location: index.php");
exit();
