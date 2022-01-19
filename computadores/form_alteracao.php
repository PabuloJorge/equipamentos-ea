<?php
include_once('../bd/conectar.php');
$id = $_GET['id'];
$sql = "SELECT * FROM tb_computador WHERE id='$id'";
$resultado = mysqli_query($strcon, $sql);
$dados = mysqli_fetch_assoc($resultado);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="../img/favicon.ico" rel="icon">
   


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
                    <a class="nav-link dropdown-toggle  text-primary" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Computadores
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="./index.php">Listar</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="./form_cadastro.php">Cadastrar</a>

                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Equipamentos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../equipamentos/">Listar</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../equipamentos/form_cadastro.php">Cadastrar</a>

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
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Manutenção
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../manutencao/">Listar</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../manutencao/form_cadastro.php">Cadastrar</a>

                    </div>
                </li>
            </ul>
        </div>

    </nav>

    <div class="content-wrapper  m-auto" style="width: 90%;">
        <section class="mt-1 mb-5">
            <h2 class="text-center">Atualizar Informações do Equipamento</h2>
            <hr>
            <div class="mb-50">
                <form class="form-horizontal was-validated" method="POST" action="alteracao.php?id=<?php echo $dados['id'] ?>" enctype="multipart/form-data">
                    <h4>Informações Gerais</h4>
                    <div class="form-group">
                        <label class="col control-label">Data de Aquisição</label>
                        <div class="col-sm-10">
                            <input type="date" min="1900-01-01" max="<?php echo date('Y-m-d'); ?>" value="<?php echo $dados['data_aquisicao']; ?>" name="data_aquisicao" class="form-control w-25" required>
                        </div>


                    </div>
                    <div class="form-group">
                        <label class="col control-label">Marca</label>
                        <div class="col-sm-10">
                            <input type="text" name="marca" class="form-control   w-25" maxlength="20" placeholder="Ex: Lenovo, HP" value="<?php echo $dados['marca']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col control-label">Etiqueta</label>
                        <div class="col-sm-10">
                            <input type="text" name="etiqueta" value="<?php echo $dados['etiqueta']; ?>" class="form-control  w-25" maxlength="50" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col control-label">Modelo</label>
                        <div class="col-sm-10">
                            <input type="text" name="modelo" value="<?php echo $dados['modelo']; ?>" class="form-control  w-25" maxlength="20" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col control-label">Sistema Operacional</label>
                        <div class="col-sm-10">
                            <input type="text" name="sistema_operacional" value="<?php echo $dados['sistema_operacional']; ?>" class="form-control  w-25" maxlength="20" placeholder="Ex: Windows 8, Linux" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col control-label">Tipo</label>
                        <div class="col-sm-10">
                            <select name="tipo" class="form-control w-25" required>

                                <option value="Desktop" <?php if ($dados['tipo'] == "Desktop") {
                                                            echo "selected";
                                                        } ?>>Desktop</option>
                                <option value="Notebook" <?php if ($dados['tipo'] == "Notebook") {
                                                                echo "selected";
                                                            } ?>>Notebook</option>

                            </select>
                        </div>
                    </div>
                    <h4>Memória RAM</h4>
                    <div class="form-group">
                        <label class="col control-label">Tipo</label>
                        <div class="col-sm-10">
                            <input type="text" name="ram_tipo" value="<?php echo $dados['ram_tipo']; ?>" class="form-control  w-25" placeholder="Ex: DDR3, DDR4" maxlength="20" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col control-label">Capacidade</label>
                        <div class="col-sm-10">
                            <select name="ram_capacidade" class="form-control w-25" required>

                                <option value="2 GB" <?php if ($dados['ram_capacidade'] == "2 GB") {
                                                            echo "selected";
                                                        } ?>>2 GB</option>
                                <option value="4 GB" <?php if ($dados['ram_capacidade'] == "4 GB") {
                                                            echo "selected";
                                                        } ?>>4 GB</option>
                                <option value="6 GB" <?php if ($dados['ram_capacidade'] == "6 GB") {
                                                            echo "selected";
                                                        } ?>>6 GB</option>
                                <option value="8 GB" <?php if ($dados['ram_capacidade'] == "8 GB") {
                                                            echo "selected";
                                                        } ?>>8 GB</option>
                                <option value="16 GB" <?php if ($dados['ram_capacidade'] == "16 GB") {
                                                            echo "selected";
                                                        } ?>>16 GB</option>
                                <option value="32 GB" <?php if ($dados['ram_capacidade'] == "32 GB") {
                                                            echo "selected";
                                                        } ?>>32 GB</option>
                                <option value="64 GB" <?php if ($dados['ram_capacidade'] == "64 GB") {
                                                            echo "selected";
                                                        } ?>>64 GB</option>
                                <option value="128 GB" <?php if ($dados['ram_capacidade'] == "128 GB") {
                                                            echo "selected";
                                                        } ?>>128 GB</option>
                                <option value="256 GB" <?php if ($dados['ram_capacidade'] == "256 GB") {
                                                            echo "selected";
                                                        } ?>>256 GB</option>
                            </select>
                        </div>
                    </div>
                    <h4>Disco Rígido</h4>
                    <div class="form-group">
                        <label class="col control-label">Tipo</label>
                        <div class="col-sm-10">
                            <select name="disco_tipo" class="form-control w-25" required>

                                <option value="SSD" <?php if ($dados['disco_tipo'] == "SSD") {
                                                        echo "selected";
                                                    } ?>>SSD</option>
                                <option value="HD" <?php if ($dados['disco_tipo'] == "HD") {
                                                        echo "selected";
                                                    } ?>>HD</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col control-label">Capacidade</label>
                        <div class="col-sm-10">
                            <input type="text" name="disco_capacidade" value="<?php echo $dados['disco_capacidade']; ?>" class="form-control  w-25" placeholder="Ex: 500 GB, 1 TB" maxlength="20" required>

                        </div>
                    </div>
                    <h4>Processador</h4>
                    <div class="form-group">
                        <label class="col control-label">Modelo</label>
                        <div class="col-sm-10">
                            <input type="text" name="processador_modelo" value="<?php echo $dados['processador_modelo']; ?>" class="form-control  w-25" placeholder="Ex: Intel Core i5" maxlength="20" required>

                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="col control-label">Velocidade</label>
                        <div class="col-sm-10 input-group " style="width: 22.5%;">
                            <input type="text" onkeypress="$(this).mask('0.00');" value="<?php echo $dados['processador_velocidade']; ?>" name="processador_velocidade" class="form-control  w-25" placeholder="Digite apenas números" maxlength="20" required>
                            <div class="input-group-append">
                                <span class="input-group-text">GHz</span>
                            </div>

                        </div>
                    </div>
                    <h4>Controle</h4>
                    <div class="form-group">
                        <label class="col control-label">Status</label>
                        <div class="col-sm-10">
                            <select name="status" class="form-control w-25" required>

                                <option value="Ativo" <?php if ($dados['status'] == "Ativo") {
                                                            echo "selected";
                                                        } ?>>Ativo</option>
                                <option value="Inativo" <?php if ($dados['status'] == "Inativo") {
                                                            echo "selected";
                                                        } ?>>Inativo</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col control-label">Situação</label>
                        <div class="col-sm-10">
                            <select name="situacao" class="form-control w-25" required>

                                <option value="Operacional" <?php if ($dados['situacao'] == "Operacional") {
                                                                echo "selected";
                                                            } ?>>Operacional</option>
                                <option value="Reserva" <?php if ($dados['situacao'] == "Reserva") {
                                                            echo "selected";
                                                        } ?>>Reserva</option>
                                <option value="Sucata" <?php if ($dados['situacao'] == "Sucata") {
                                                            echo "selected";
                                                        } ?>>Sucata</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-success  mr-3">Salvar</button>
                            <a href="./index.php" class="btn btn-primary">Voltar</a>

                        </div>
                    </div>
                </form>
            </div>
        </section>



    </div>


    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
</body>

</html>