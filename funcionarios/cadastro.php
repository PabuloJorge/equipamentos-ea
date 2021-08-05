<?php


include_once('../bd/conectar.php');
include_once('../functions/limpaCampos.php');



$cpf = limpaCampos($_POST['cpf']);
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



if ($computador_id == $computador_id_home) {
    header("Location: form_cadastro.php?computador_id_invalido=True");
    exit();
}



$resultadoDadosValidos =  mysqli_query($strcon, " SELECT * FROM tb_funcionario WHERE cpf = '$cpf'");

$row = mysqli_num_rows($resultadoDadosValidos);

if ($row == 1) {
    header("Location: form_cadastro.php?dadosInvalidos=True");
    exit();
} else {
    /* Atualizando status e situação do computador 1 */
    $sql = "UPDATE tb_computador SET status = 'Ativo', situacao = 'Operacional' WHERE id = '$computador_id'";

    $resultado = mysqli_query($strcon, $sql);

    /* Atualizando status e situação do computador 2 */
    $sql = "UPDATE tb_computador SET status = 'Ativo', situacao = 'Operacional' WHERE id = '$computador_id_home'";

    $resultado = mysqli_query($strcon, $sql);

    /* Cadastrando o fucnionário */
    if ($computador_id != "null" && $computador_id_home != "null") {
        $sql = "INSERT INTO tb_funcionario (cpf,  nome, computador_id,computador_id_home, local, tipo,  setor, carteira, endereco, anydesk, velocidade_link)
        VALUES ('$cpf', '$nome', '$computador_id','$computador_id_home', '$local', '$tipo', '$setor', '$carteira', '$endereco', '$anydesk', '$velocidade_link')";
        echo "1";
    } else if($computador_id != "null" && $computador_id_home == "null") {
        $sql = "INSERT INTO tb_funcionario (cpf,  nome, computador_id, local, tipo,  setor, carteira, endereco, anydesk, velocidade_link)
        VALUES ('$cpf', '$nome', '$computador_id', '$local', '$tipo', '$setor', '$carteira', '$endereco', '$anydesk', '$velocidade_link')";
        echo "2";
    } else if ($computador_id == "null" && $computador_id_home != "null") {
        $sql = "INSERT INTO tb_funcionario (cpf,  nome, computador_id_home, local, tipo,  setor, carteira, endereco, anydesk, velocidade_link)
        VALUES ('$cpf', '$nome', '$computador_id_home', '$local', '$tipo', '$setor', '$carteira', '$endereco', '$anydesk', '$velocidade_link')";
        echo "3";
    } else {
        $sql = "INSERT INTO tb_funcionario (cpf,  nome, local, tipo,  setor, carteira, endereco, anydesk, velocidade_link)
        VALUES ('$cpf', '$nome', '$local', '$tipo', '$setor', '$carteira', '$endereco', '$anydesk', '$velocidade_link')";
        echo "4";
    }



    $resultado = mysqli_query($strcon, $sql);

    header("Location: index.php");
    exit();
}
