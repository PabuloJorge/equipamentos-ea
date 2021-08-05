<?php


include_once('../bd/conectar.php');
include_once('../functions/limpaCampos.php');



$data_aquisicao = $_POST['data_aquisicao'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$sistema_operacional = $_POST['sistema_operacional'];
$tipo = $_POST['tipo'];
$ram_tipo = $_POST['ram_tipo'];
$ram_capacidade = $_POST['ram_capacidade'];
$disco_tipo = $_POST['disco_tipo'];
$disco_capacidade = $_POST['disco_capacidade'];
$processador_modelo = $_POST['processador_modelo'];
$processador_velocidade = $_POST['processador_velocidade'];
$status = $_POST['status'];
$situacao = $_POST['situacao'];


$sql = "INSERT INTO tb_computador (data_aquisicao, marca, modelo, sistema_operacional, tipo, ram_tipo, ram_capacidade, disco_tipo, disco_capacidade, processador_modelo, processador_velocidade, status, situacao)
                VALUES ('$data_aquisicao', '$marca', '$modelo', '$sistema_operacional', '$tipo', '$ram_tipo', '$ram_capacidade', '$disco_tipo', '$disco_capacidade', '$processador_modelo', '$processador_velocidade', '$status', '$situacao')";

$resultado = mysqli_query($strcon, $sql);

header("Location: index.php");
exit();
