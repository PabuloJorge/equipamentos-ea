<?php


include_once('../bd/conectar.php');
include_once('../functions/limpaCampos.php');



$computador_id = $_POST['computador_id'];
$local = $_POST['local'];
$status = $_POST['status'];
$descricao = $_POST['descricao'];

/* atualizando o status e situação do computador */
$sql = "UPDATE tb_computador SET status = 'Inativo',situacao = 'Manutenção'  WHERE id = '$computador_id'";
$resultado = mysqli_query($strcon, $sql);

/* desassociando o funcionário do computador */
$sql = "SELECT * FROM tb_funcionario WHERE computador_id = '$computador_id' or computador_id_home = '$computador_id'";
$result = mysqli_query($strcon, $sql);
$dados = mysqli_fetch_assoc($result);
if ($dados['computador_id'] == $computador_id) {
    $sql = "UPDATE tb_funcionario SET computador_id = null WHERE computador_id = '$computador_id'";
    $resultado = mysqli_query($strcon, $sql);
} else if ($dados['computador_id_home'] == $computador_id) {
    $sql = "UPDATE tb_funcionario SET computador_id_home = null WHERE computador_id_home = '$computador_id'";
    $resultado = mysqli_query($strcon, $sql);
}

$sql = "INSERT INTO tb_manutencao (computador_id,  local, status, descricao)
                VALUES ('$computador_id', '$local', '$status', '$descricao')";

$resultado = mysqli_query($strcon, $sql);

header("Location: index.php");
exit();
