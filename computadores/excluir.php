<?php

include_once('../bd/conectar.php');

$id = $_GET['id'];
$sql = "DELETE FROM tb_computador WHERE id = '$id'";
$resultado = mysqli_query($strcon, $sql);
header("Location: index.php");
exit();
