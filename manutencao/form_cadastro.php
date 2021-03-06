<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="../img/favicon.ico" rel="icon">
    <style>
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
    
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
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Equipamentos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="./index.php">Listar</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Cadastrar</a>

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
                        <a class="dropdown-item" href="index.php">Listar</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Cadastrar</a>

                    </div>
                </li>
            </ul>
        </div>

    </nav>

    <div class="content-wrapper  m-auto" style="width: 90%;">
        <section class="mt-1 mb-5">
            <h2 class="text-center">Cadastro de Equipamento</h2>
            <hr>
            <div class="mb-50">
                <form class="form-horizontal was-validated" method="POST" action="cadastro.php" enctype="multipart/form-data">

                <div class="form-group">
                        <label class="col control-label">ID COMPUTADOR</label>
                        <div class="col-sm-10">
                            <select name="computador_id" class="form-control w-50" required>
                                <option value="" data-default disabled selected></option>
                                <?php
                                include_once('../bd/conectar.php');

                                $sql = "SELECT * FROM tb_computador;";

                                $resultado = mysqli_query($strcon, $sql);
                                $cont = 0;
                                while ($dados = mysqli_fetch_assoc($resultado)) {
                                    echo "<option value='" . $dados['id'] . "'>" . $dados['id'] . " - " . $dados['tipo'] . " " . $dados['marca'] . " " . $dados['processador_modelo'] . " " . $dados['ram_capacidade'] . " RAM " . $dados['disco_tipo'] . " " . $dados['disco_capacidade'] . " " . $dados['sistema_operacional'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col control-label">Local</label>
                        <div class="col-sm-10">
                            <select name="local" class="form-control w-25" required>
                                <option value="" data-default disabled selected></option>
                                <option value="Interna">Interna</option>
                                <option value="Externa">Externa</option>
                                

                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col control-label">Status</label>
                        <div class="col-sm-10">
                            <select name="status" class="form-control w-25" required>
                                <option value="" data-default disabled selected></option>
                                <option value="Em andamento" selected>Em andamento</option>
                                <option value="Finalizada">Finalizada</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col control-label">Descrição</label>
                        <div class="col-sm-10">
                            <textarea name="descricao" class="form-control w-50" maxlength="200"></textarea>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-success  mr-3">Cadastrar</button>
                            <a href="./index.php" class="btn btn-primary">Voltar</a>

                        </div>
                    </div>
                </form>
            </div>
        </section>


        <?php
        if (isset($_GET['dadosInvalidos'])) {
            if ($_GET['dadosInvalidos'] == "True") :
        ?>
                <div class="text-center text-danger">
                    <?php echo    '<body onload="alert(' . "'" . 'CPF já está vinculado a uma máquina!' . "'" . ');">'; ?>
                </div>
        <?php
            endif;
            unset($dadosInvalidos);
        }
        ?>
    </div>


    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
</body>

</html>