<?php


include_once('../bd/conectar.php');
include_once('../functions/limpaCampos.php');

$cpf_atual = limpaCampos($_GET['cpf']);
$id_atual = $_GET['id_atual'];
$id_home_atual = $_GET['id_home_atual'];

$cpf_novo = limpaCampos($_POST['cpf']);
$nome = $_POST['nome'];
$computador_id = $_POST['computador_id'];
$computador_id_home = $_POST['computador_id_home'];
$local = $_POST['local'];
$tipo = $_POST['tipo'];
$setor = $_POST['setor'];
$carteira = $_POST['carteira'];
$endereco = $_POST['endereco'];
$anydesk = $_POST['anydesk'];
$velocidade_link = $_POST['velocidade_link'];

if ($computador_id != "null" && $computador_id_home != "null" && $computador_id == $computador_id_home) {
    header("Location: form_alteracao.php?cpf=".$cpf_novo."&computador_id_invalido=True");
    exit();
}

/* Verificando se houve alteração de computador para o funcionário e atuazalindo o status e situação deles
ex: 
1 - pessoa tem computador 1
2 - pessoa passa a ter computador 2
3 - o "status" do computador 1 vai ser alterado para "Inativo" e a "situação" para "Reserva"
4 - o "status" do computador 2 vai ser alterado para "Ativo" e a "situação" para "Operacional"
*/
if ($computador_id != $id_atual) {
    $sql = "UPDATE tb_computador SET status = 'Ativo', situacao = 'Operacional' WHERE id = '$computador_id'";
    $resultado = mysqli_query($strcon, $sql);

    $sql = "UPDATE tb_computador SET status = 'Inativo', situacao = 'Reserva' WHERE id = '$id_atual'";
    $resultado = mysqli_query($strcon, $sql);
}

if ($computador_id_home != $id_home_atual) {
    $sql = "UPDATE tb_computador SET status = 'Ativo', situacao = 'Operacional' WHERE id = '$computador_id_home'";
    $resultado = mysqli_query($strcon, $sql);

    $sql = "UPDATE tb_computador SET status = 'Inativo', situacao = 'Reserva' WHERE id = '$id_home_atual'";
    $resultado = mysqli_query($strcon, $sql);
}


/* Atualizando os dados do funcionário */
if ($computador_id != "null" && $computador_id_home != "null") {
    $sql = "UPDATE tb_funcionario SET cpf = '$cpf_novo', nome = '$nome', computador_id = '$computador_id', computador_id_home = '$computador_id_home', local = '$local', tipo = '$tipo', setor = '$setor', carteira = '$carteira', endereco = '$endereco', anydesk = '$anydesk', velocidade_link = '$velocidade_link' WHERE cpf = '$cpf_atual'";
} else if ($computador_id != "null" && $computador_id_home == "null") {
    $sql = "UPDATE tb_funcionario SET cpf = '$cpf_novo', nome = '$nome', computador_id = '$computador_id', computador_id_home = NULL, local = '$local', tipo = '$tipo', setor = '$setor', carteira = '$carteira', endereco = '$endereco', anydesk = '$anydesk', velocidade_link = '$velocidade_link' WHERE cpf = '$cpf_atual'";
} else if ($computador_id == "null" && $computador_id_home != "null") {
    $sql = "UPDATE tb_funcionario SET cpf = '$cpf_novo', nome = '$nome', computador_id = NULL, computador_id_home = '$computador_id_home', local = '$local', tipo = '$tipo', setor = '$setor', carteira = '$carteira', endereco = '$endereco', anydesk = '$anydesk', velocidade_link = '$velocidade_link' WHERE cpf = '$cpf_atual'";
} else {
    $sql = "UPDATE tb_funcionario SET cpf = '$cpf_novo', nome = '$nome', computador_id = NULL, computador_id_home = NULL, local = '$local', tipo = '$tipo', setor = '$setor', carteira = '$carteira', endereco = '$endereco', anydesk = '$anydesk', velocidade_link = '$velocidade_link' WHERE cpf = '$cpf_atual'";
}
$resultado = mysqli_query($strcon, $sql);

header("Location: index.php");
exit();
