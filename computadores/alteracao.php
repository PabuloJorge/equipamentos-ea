<?php


include_once('../bd/conectar.php');
include_once('../functions/limpaCampos.php');

$id = $_GET['id'];

$data_aquisicao = $_POST['data_aquisicao'];
$marca = $_POST['marca'];
$etiqueta = $_POST['etiqueta'];
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

if ($status == "Inativo") {
    $sql = "SELECT * FROM tb_funcionario WHERE computador_id = '$id' or computador_id_home = '$id'";
    $result = mysqli_query($strcon, $sql);
    $dados = mysqli_fetch_assoc($result);
    if ($dados['computador_id'] == $id) {
        $sql = "UPDATE tb_funcionario SET computador_id = null WHERE computador_id = '$id'";
        $resultado = mysqli_query($strcon, $sql);
    } else if($dados['computador_id_home'] == $id){
        $sql = "UPDATE tb_funcionario SET computador_id_home = null WHERE computador_id_home = '$id'";
        $resultado = mysqli_query($strcon, $sql);
    }
}

$sql = "UPDATE tb_computador SET data_aquisicao = '$data_aquisicao', marca = '$marca', etiqueta = '$etiqueta', modelo = '$modelo', sistema_operacional = '$sistema_operacional', tipo = '$tipo', ram_tipo = '$ram_tipo', ram_capacidade = '$ram_capacidade', disco_tipo = '$disco_tipo', disco_capacidade = '$disco_capacidade', processador_modelo = '$processador_modelo', processador_velocidade = '$processador_velocidade', status = '$status', situacao = '$situacao' WHERE id = '$id'";

$resultado = mysqli_query($strcon, $sql);

header("Location: index.php");
exit();
