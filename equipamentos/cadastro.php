<?php


include_once('../bd/conectar.php');
include_once('../functions/limpaCampos.php');



$data_aquisicao = $_POST['data_aquisicao'];
$tipo = $_POST['tipo'];
$descricao = $_POST['descricao'];
$status = $_POST['status'];
$situacao = $_POST['situacao'];


$sql = "INSERT INTO tb_equipamento (data_aquisicao,  tipo, descricao, status, situacao)
                VALUES ('$data_aquisicao', '$tipo', '$descricao', '$status', '$situacao')";

$resultado = mysqli_query($strcon, $sql);

header("Location: index.php");
exit();
