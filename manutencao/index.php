<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/26a3a5c400.js" crossorigin="anonymous"></script>
    <link href="../img/favicon.ico" rel="icon">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css" />
    <title>Equipamentos EA</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <a class="navbar-brand text-center" href="#" style="font-size: 30px">
            <img src="../img/nav.png" width="60" height="50" class="d-inline-block align-top" alt="">
            Equipamentos EA
        </a>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Início</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Computadores
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../computadores/">Listar</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../computadores/form_cadastro.php">Cadastrar</a>

                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle  " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Equipamentos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Listar</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="./form_cadastro.php">Cadastrar</a>

                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Funcionários
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../funcionarios/">Listar</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../funcionarios/form_cadastro.php">Cadastrar</a>

                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-primary" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Manutenção
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Listar</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="form_cadastro.php">Cadastrar</a>

                    </div>
                </li>
            </ul>
        </div>

    </nav>

    <div class="content-wrapper m-auto" style="max-width: 99%;">
        <section class="mt-5 mb-5">
            <div>

                <table id="tabela" class="table table-hover text-center shadow-lg table-bordered" style="font-size: 13px;">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col" class="text-center">ID</th>
                            <th scope="col" class="text-center">ID COMPUTADOR</th>
                            <th scope="col" class="text-center">LOCAL</th>
                            <th scope="col" class="text-center">STATUS</th>
                            <th scope="col" class="text-center">DESCRIÇÃO</th>
                            <th scope="col" class="text-center">DATA DE INCLUSÃO</th>
                            <th scope="col" class="text-center">AÇÕES</th>



                        </tr>

                    </thead>
                    <tbody>
                        <?php

                        include_once "../bd/config.php";

                        $consulta = $conexao->query("SELECT * FROM tb_manutencao");


                        $cont = 0;
                        while ($dados = $consulta->fetch()) {
                            $cont += 1;
                            if ($dados['status'] == "Em andamento") {
                                $corTextoStatus = "text-success";
                            } else {
                                $corTextoStatus = "text-danger";
                            }


                            echo "
						<tr>
							<th class='align-middle' scope='row'>" . $cont . "</th>

							<td class='align-middle'>" . $dados['id'] . "</td>
                            <td class='align-middle'><a href='#modalComputador?computador_id=" . $dados['computador_id'] . "'  data-toggle='modal' data-target='#modalComputador" . $dados['computador_id'] . "'>" . $dados['computador_id'] . "</a></td>
                            <td class='align-middle'>" . $dados['local'] . "</td>
                            <td  class='align-middle text-uppercase . $corTextoStatus .'>" . $dados['status'] . "</td>
                            <td class='align-middle'>" . $dados['descricao'] . "</td>
                           
                            
							
                            <td class='align-middle'>" . date('d/m/Y', strtotime($dados['data_inclusao'])) . "</td>

							<td class='align-middle'> <a class='btn btn-primary btn-sm' href='form_alteracao.php?id=" . $dados['id'] . " '>Editar</a>
                             <a class='btn btn-danger btn-sm' href='#modalExcluir?id=" . $dados['id'] . "' data-toggle='modal' data-target='#modalExcluir" . $dados['id'] . "'>Excluir</a>
                            </td>
							</tr>
							";

                        ?>
                            <!-- Modal  Excluir-->
                            <div class="modal fade" id="modalExcluir<?php echo $dados['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header  text-center">
                                            <h5 class="modal-title" id="exampleModalLabel">Realmente deseja excluir?</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <a href="./excluir.php?id=<?php echo $dados['id'] ?>" class="btn btn-danger mr-4">Sim</a>
                                            <button type="button" class="btn btn-success" data-dismiss="modal">Não</button>

                                        </div>
                                        <div class="modal-footer">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal  Detalhes Computador Empresa-->
                            <div class="modal fade" id="modalComputador<?php echo $dados['computador_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header  text-center">
                                            <h5 class="modal-title" id="exampleModalLabel">Detalhes do Computador</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body text-center">

                                            <?php
                                            include_once('../bd/conectar.php');
                                            if ($dados['computador_id'] != null) {
                                                $sql = "SELECT * FROM tb_computador WHERE id = '$dados[computador_id]';";
                                                $result = mysqli_query($strcon, $sql);
                                                $dado = mysqli_fetch_assoc($result);
                                                echo $dado['id'] . " - " . $dado['tipo'] . " " . $dado['marca'] . " " . $dado['processador_modelo'] . " " . $dado['ram_capacidade'] . " RAM " . $dado['disco_tipo'] . " " . $dado['disco_capacidade'] . " " . $dado['sistema_operacional'];
                                            } ?>
                                        </div>
                                        <div class="modal-footer">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>


        <?php
        if (isset($_GET['statusInvalido'])) {
            if ($_GET['statusInvalido'] == "True") :
        ?>
                <div class="text-center text-danger">
                    <?php echo    '<body onload="alert(' . "'" . 'A manutenção ainda não foi finalizada!' . "'" . ');">'; ?>
                </div>
        <?php
            endif;
            unset($_GET['statusInvalido']);
        }
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#tabela').DataTable({
                language: {
                    url: "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json",
                },
            });
        });
    </script>


    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
</body>

</html>