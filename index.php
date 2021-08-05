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
    <link href="./img/favicon.ico" rel="icon">
    <!-- ChartJS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.4.1/dist/chart.min.js"></script>

    <title>Equipamentos EA</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <a class="navbar-brand text-center" href="#" style="font-size: 30px">
            <img src="./img/nav.png" width="60" height="50" class="d-inline-block align-top" alt="">
            Equipamentos EA
        </a>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-primary" href="#">Início</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Computadores
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="./computadores/">Listar</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="./computadores/form_cadastro.php">Cadastrar</a>

                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Equipamentos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="./equipamentos/">Listar</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="./equipamentos/form_cadastro.php">Cadastrar</a>

                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Funcionários
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="./funcionarios/">Listar</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="./funcionarios/form_cadastro.php">Cadastrar</a>

                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Manutenção
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="./manutencao/">Listar</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="./manutencao/form_cadastro.php">Cadastrar</a>

                    </div>
                </li>
            </ul>
        </div>

    </nav>

    <div class="content-wrapper m-auto" style="max-width: 99%;">
        <section class="mt-1 mb-5">
            <div class="container">
                <h3 class="text-center mb-3 font-weight-normal">Computadores</h3>
                <div class="row">
                    <div class="col-sm">
                        <canvas id="statusComputadores"></canvas>

                    </div>
                    <div class="col-sm">
                        <canvas id="situacaoComputadores"></canvas>
                    </div>
                    <div class="col-sm">
                        <canvas id="discoComputadores"></canvas>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <canvas id="tipoComputadores"></canvas>

                    </div>
                    <div class="col-sm">

                    </div>
                    <div class="col-sm">

                    </div>
                </div>
                <hr>
                <h3 class="text-center mb-3 font-weight-normal">Funcionários</h3>
                <div class="row">
                    <div class="col-sm">
                        <canvas id="localFuncionarios"></canvas>

                    </div>
                    <div class="col-sm">
                        <canvas id="setorFuncionarios"></canvas>
                    </div>
                    <div class="col-sm">
                        <canvas id="carteiraFuncionarios"></canvas>
                    </div>
                </div>
                <hr>
                <h3 class="text-center mb-3 font-weight-normal">Equipamentos</h3>
                <h5 class="font-weight-normal">Mouse</h5>
                <div class="row">
                    <div class="col-sm">
                        <canvas id="statusMouse"></canvas>

                    </div>
                    <div class="col-sm">
                        <canvas id="situacaoMouse"></canvas>
                    </div>
                    <div class="col-sm">

                    </div>
                </div>
                <h5 class="font-weight-normal">Teclado</h5>
                <div class="row">
                    <div class="col-sm">
                        <canvas id="statusTeclado"></canvas>

                    </div>
                    <div class="col-sm">
                        <canvas id="situacaoTeclado"></canvas>
                    </div>
                    <div class="col-sm">

                    </div>
                </div>
                <h5 class="font-weight-normal">Monitor</h5>
                <div class="row">
                    <div class="col-sm">
                        <canvas id="statusMonitor"></canvas>

                    </div>
                    <div class="col-sm">
                        <canvas id="situacaoMonitor"></canvas>
                    </div>
                    <div class="col-sm">

                    </div>
                </div>
                <h5 class="font-weight-normal">Headset</h5>
                <div class="row">
                    <div class="col-sm">
                        <canvas id="statusHeadset"></canvas>

                    </div>
                    <div class="col-sm">
                        <canvas id="situacaoHeadset"></canvas>
                    </div>
                    <div class="col-sm">

                    </div>
                </div>
                <h5 class="font-weight-normal">TV</h5>
                <div class="row">
                    <div class="col-sm">
                        <canvas id="statusTV"></canvas>

                    </div>
                    <div class="col-sm">
                        <canvas id="situacaoTV"></canvas>
                    </div>
                    <div class="col-sm">

                    </div>
                </div>
            </div>

        </section>
    </div>

    <?php include_once('./bd/conectar.php');

    $sql = "SELECT status, COUNT(*) AS quantidade from tb_computador GROUP BY status;";

    $resultado = mysqli_query($strcon, $sql);

    $status = array();
    $quantidade = array();
    while ($dados = mysqli_fetch_assoc($resultado)) {
        $status[] = $dados['status'];
        $quantidade[] = $dados['quantidade'];
    }
    ?>
    <!-- ChartJS -->
    <script>
        var ctx = document.getElementById('statusComputadores').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [<?php foreach ($status as $value) {
                                echo "'" . $value . "',";
                            } ?>],
                datasets: [{
                    label: 'Quantidade de computadores',
                    data: [<?php foreach ($quantidade as $value) {
                                echo $value . ",";
                            } ?>],
                    backgroundColor: [
                        'rgb(75, 192, 192)',
                        'rgb(255, 99, 132)'
                    ],
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }

                },
                plugins: {
                    title: {
                        display: true,
                        text: 'STATUS'
                    }
                },
                maintainAspectRatio: false,

            }
        });
    </script>


    <?php

    $sql = "SELECT situacao, COUNT(*) AS quantidade from tb_computador GROUP BY situacao;";

    $resultado = mysqli_query($strcon, $sql);

    $situacao = array();
    $quantidade = array();
    while ($dados = mysqli_fetch_assoc($resultado)) {
        $situacao[] = $dados['situacao'];
        $quantidade[] = $dados['quantidade'];
    }
    ?>
    <script>
        var ctx = document.getElementById('situacaoComputadores').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: [<?php foreach ($situacao as $value) {
                                echo "'" . $value . "',";
                            } ?>],
                datasets: [{
                    label: 'My First Dataset',
                    data: [<?php foreach ($quantidade as $value) {
                                echo $value . ",";
                            } ?>],
                    backgroundColor: [
                        'rgb(54, 162, 235)',
                        'rgb(255, 205, 86)',
                        'rgb(255, 99, 132)',
                        'rgb(201, 203, 207)'
                    ],
                    hoverOffset: 4
                }]
            },
            options: {
                plugins: {
                    title: {
                        display: true,
                        text: 'SITUAÇÃO'
                    }
                }
            }
        });
    </script>

    <?php

    $sql = "SELECT disco_tipo, COUNT(*) AS quantidade FROM tb_computador GROUP BY disco_tipo";

    $resultado = mysqli_query($strcon, $sql);

    $disco_tipo = array();
    $quantidade = array();
    while ($dados = mysqli_fetch_assoc($resultado)) {
        $disco_tipo[] = $dados['disco_tipo'];
        $quantidade[] = $dados['quantidade'];
    }

    ?>
    <!-- ChartJS -->
    <script>
        var ctx = document.getElementById('discoComputadores').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: [<?php foreach ($disco_tipo as $value) {
                                echo "'" . $value . "',";
                            } ?>],
                datasets: [{
                    label: 'Quantidade de computadores',
                    data: [<?php foreach ($quantidade as $value) {
                                echo $value . ",";
                            } ?>],
                    backgroundColor: [
                        'rgb(255, 99, 132)',
                        'rgb(75, 192, 192)'

                    ],
                }]
            },
            options: {
                plugins: {
                    title: {
                        display: true,
                        text: 'DISCO RÍGIDO'
                    }
                },
                maintainAspectRatio: false,

            }
        });
    </script>

    <?php

    $sql = "SELECT tipo, COUNT(*) AS quantidade FROM tb_computador GROUP BY tipo;";

    $resultado = mysqli_query($strcon, $sql);

    $tipo = array();
    $quantidade = array();
    while ($dados = mysqli_fetch_assoc($resultado)) {
        $tipo[] = $dados['tipo'];
        $quantidade[] = $dados['quantidade'];
    }

    ?>
    <script>
        var ctx = document.getElementById('tipoComputadores').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: [<?php foreach ($tipo as $value) {
                                echo "'" . $value . "',";
                            } ?>],
                datasets: [{
                    label: 'My First Dataset',
                    data: [<?php foreach ($quantidade as $value) {
                                echo $value . ",";
                            } ?>],
                    backgroundColor: [
                        'rgb(54, 162, 235)',
                        'rgb(255, 205, 86)',

                    ],
                    hoverOffset: 4
                }]
            },
            options: {
                plugins: {
                    title: {
                        display: true,
                        text: 'TIPO'
                    }
                }
            }
        });
    </script>



    <?php

    $sql = "SELECT local, COUNT(*) AS quantidade FROM tb_funcionario GROUP BY local;";

    $resultado = mysqli_query($strcon, $sql);

    $local = array();
    $quantidade = array();
    while ($dados = mysqli_fetch_assoc($resultado)) {
        $local[] = $dados['local'];
        $quantidade[] = $dados['quantidade'];
    }


    ?>
    <script>
        var ctx = document.getElementById('localFuncionarios').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: [<?php foreach ($local as $value) {
                                echo "'" . $value . "',";
                            } ?>],
                datasets: [{
                    label: 'My First Dataset',
                    data: [<?php foreach ($quantidade as $value) {
                                echo $value . ",";
                            } ?>],
                    backgroundColor: [
                        'rgb(255, 205, 86)',
                        'rgb(54, 162, 235)'
                    ],
                    hoverOffset: 4
                }]
            },
            options: {
                plugins: {
                    title: {
                        display: true,
                        text: 'LOCAL DE TRABALHO'
                    }
                }
            }
        });
    </script>

    <?php
    $sql = "SELECT setor, COUNT(*) AS quantidade FROM tb_funcionario GROUP BY setor;";

    $resultado = mysqli_query($strcon, $sql);

    $setor = array();
    $quantidade = array();
    while ($dados = mysqli_fetch_assoc($resultado)) {
        $setor[] = $dados['setor'];
        $quantidade[] = $dados['quantidade'];
    }


    ?>
    <script>
        var ctx = document.getElementById('setorFuncionarios').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: [<?php foreach ($setor as $value) {
                                echo "'" . $value . "',";
                            } ?>],
                datasets: [{
                    label: 'My First Dataset',
                    data: [<?php foreach ($quantidade as $value) {
                                echo $value . ",";
                            } ?>],
                    backgroundColor: [
                        'rgb(54, 162, 235)',
                        'rgb(255, 205, 86)',
                        'rgb(255, 99, 132)'
                    ],
                    hoverOffset: 4
                }]
            },
            options: {
                plugins: {
                    title: {
                        display: true,
                        text: 'SETOR'
                    }
                }
            }
        });
    </script>
    <?php

    $sql = "SELECT carteira, COUNT(*) AS quantidade FROM tb_funcionario GROUP BY carteira;";

    $resultado = mysqli_query($strcon, $sql);

    $carteira = array();
    $quantidade = array();
    while ($dados = mysqli_fetch_assoc($resultado)) {
        $carteira[] = $dados['carteira'];
        $quantidade[] = $dados['quantidade'];
    }

    ?>

    <!-- ChartJS -->
    <script>
        var ctx = document.getElementById('carteiraFuncionarios').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: [<?php foreach ($carteira as $value) {
                                echo "'" . $value . "',";
                            } ?>],
                datasets: [{
                    label: 'Quantidade de funcionários',
                    data: [<?php foreach ($quantidade as $value) {
                                echo $value . ",";
                            } ?>],
                    backgroundColor: [
                        'rgb(255, 99, 132)',
                        'rgb(75, 192, 192)',
                        'rgb(255, 205, 86)',
                        'rgb(201, 203, 207)',
                        'rgb(54, 162, 235)',
                        'rgb(133, 99, 255)',
                        'rgb(99, 237, 255)',
                        'rgb(117, 255, 99)'
                    ],
                }]
            },
            options: {
                plugins: {
                    title: {
                        display: true,
                        text: 'CARTEIRA'
                    }
                },
                maintainAspectRatio: false,

            }
        });
    </script>

    <?php
    $sql = "SELECT status, count(*) AS quantidade FROM tb_equipamento WHERE tipo = 'Mouse' GROUP BY status;";

    $resultado = mysqli_query($strcon, $sql);

    $status = array();
    $quantidade = array();
    while ($dados = mysqli_fetch_assoc($resultado)) {
        $status[] = $dados['status'];
        $quantidade[] = $dados['quantidade'];
    }
    ?>
    <!-- ChartJS -->
    <script>
        var ctx = document.getElementById('statusMouse').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [<?php foreach ($status as $value) {
                                echo "'" . $value . "',";
                            } ?>],
                datasets: [{
                    label: 'Quantidade de mouses',
                    data: [<?php foreach ($quantidade as $value) {
                                echo $value . ",";
                            } ?>],
                    backgroundColor: [
                        'rgb(75, 192, 192)',
                        'rgb(255, 99, 132)'
                    ],
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }

                },
                plugins: {
                    title: {
                        display: true,
                        text: 'STATUS'
                    }
                },
                maintainAspectRatio: false,

            }
        });
    </script>

    <?php

    $sql = "SELECT situacao, count(*) AS quantidade FROM tb_equipamento WHERE tipo = 'Mouse' GROUP BY situacao;";

    $resultado = mysqli_query($strcon, $sql);

    $situacao = array();
    $quantidade = array();
    while ($dados = mysqli_fetch_assoc($resultado)) {
        $situacao[] = $dados['situacao'];
        $quantidade[] = $dados['quantidade'];
    }
    ?>
    <script>
        var ctx = document.getElementById('situacaoMouse').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: [<?php foreach ($situacao as $value) {
                                echo "'" . $value . "',";
                            } ?>],
                datasets: [{
                    label: 'My First Dataset',
                    data: [<?php foreach ($quantidade as $value) {
                                echo $value . ",";
                            } ?>],
                    backgroundColor: [
                        'rgb(54, 162, 235)',
                        'rgb(255, 205, 86)',
                        'rgb(255, 99, 132)'
                    ],
                    hoverOffset: 4
                }]
            },
            options: {
                plugins: {
                    title: {
                        display: true,
                        text: 'SITUAÇÃO'
                    }
                }
            }
        });
    </script>

    <?php
    $sql = "SELECT status, count(*) AS quantidade FROM tb_equipamento WHERE tipo = 'Teclado' GROUP BY status;";

    $resultado = mysqli_query($strcon, $sql);

    $status = array();
    $quantidade = array();
    while ($dados = mysqli_fetch_assoc($resultado)) {
        $status[] = $dados['status'];
        $quantidade[] = $dados['quantidade'];
    }
    ?>
    <!-- ChartJS -->
    <script>
        var ctx = document.getElementById('statusTeclado').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [<?php foreach ($status as $value) {
                                echo "'" . $value . "',";
                            } ?>],
                datasets: [{
                    label: 'Quantidade de teclados',
                    data: [<?php foreach ($quantidade as $value) {
                                echo $value . ",";
                            } ?>],
                    backgroundColor: [
                        'rgb(75, 192, 192)',
                        'rgb(255, 99, 132)'
                    ],
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }

                },
                plugins: {
                    title: {
                        display: true,
                        text: 'STATUS'
                    }
                },
                maintainAspectRatio: false,

            }
        });
    </script>

    <?php

    $sql = "SELECT situacao, count(*) AS quantidade FROM tb_equipamento WHERE tipo = 'Teclado' GROUP BY situacao;";

    $resultado = mysqli_query($strcon, $sql);

    $situacao = array();
    $quantidade = array();
    while ($dados = mysqli_fetch_assoc($resultado)) {
        $situacao[] = $dados['situacao'];
        $quantidade[] = $dados['quantidade'];
    }
    ?>
    <script>
        var ctx = document.getElementById('situacaoTeclado').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: [<?php foreach ($situacao as $value) {
                                echo "'" . $value . "',";
                            } ?>],
                datasets: [{
                    label: 'My First Dataset',
                    data: [<?php foreach ($quantidade as $value) {
                                echo $value . ",";
                            } ?>],
                    backgroundColor: [
                        'rgb(54, 162, 235)',
                        'rgb(255, 205, 86)',
                        'rgb(255, 99, 132)'
                    ],
                    hoverOffset: 4
                }]
            },
            options: {
                plugins: {
                    title: {
                        display: true,
                        text: 'SITUAÇÃO'
                    }
                }
            }
        });
    </script>

    <?php
    $sql = "SELECT status, count(*) AS quantidade FROM tb_equipamento WHERE tipo = 'Monitor' GROUP BY status;";

    $resultado = mysqli_query($strcon, $sql);

    $status = array();
    $quantidade = array();
    while ($dados = mysqli_fetch_assoc($resultado)) {
        $status[] = $dados['status'];
        $quantidade[] = $dados['quantidade'];
    }
    ?>
    <!-- ChartJS -->
    <script>
        var ctx = document.getElementById('statusMonitor').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [<?php foreach ($status as $value) {
                                echo "'" . $value . "',";
                            } ?>],
                datasets: [{
                    label: 'Quantidade de monitores',
                    data: [<?php foreach ($quantidade as $value) {
                                echo $value . ",";
                            } ?>],
                    backgroundColor: [
                        'rgb(75, 192, 192)',
                        'rgb(255, 99, 132)'
                    ],
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }

                },
                plugins: {
                    title: {
                        display: true,
                        text: 'STATUS'
                    }
                },
                maintainAspectRatio: false,

            }
        });
    </script>

    <?php

    $sql = "SELECT situacao, count(*) AS quantidade FROM tb_equipamento WHERE tipo = 'Monitor' GROUP BY situacao;";

    $resultado = mysqli_query($strcon, $sql);

    $situacao = array();
    $quantidade = array();
    while ($dados = mysqli_fetch_assoc($resultado)) {
        $situacao[] = $dados['situacao'];
        $quantidade[] = $dados['quantidade'];
    }
    ?>
    <script>
        var ctx = document.getElementById('situacaoMonitor').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: [<?php foreach ($situacao as $value) {
                                echo "'" . $value . "',";
                            } ?>],
                datasets: [{
                    label: 'My First Dataset',
                    data: [<?php foreach ($quantidade as $value) {
                                echo $value . ",";
                            } ?>],
                    backgroundColor: [
                        'rgb(54, 162, 235)',
                        'rgb(255, 205, 86)',
                        'rgb(255, 99, 132)'
                    ],
                    hoverOffset: 4
                }]
            },
            options: {
                plugins: {
                    title: {
                        display: true,
                        text: 'SITUAÇÃO'
                    }
                }
            }
        });
    </script>


    <?php
    $sql = "SELECT status, count(*) AS quantidade FROM tb_equipamento WHERE tipo = 'Headset' GROUP BY status;";

    $resultado = mysqli_query($strcon, $sql);

    $status = array();
    $quantidade = array();
    while ($dados = mysqli_fetch_assoc($resultado)) {
        $status[] = $dados['status'];
        $quantidade[] = $dados['quantidade'];
    }
    ?>
    <!-- ChartJS -->
    <script>
        var ctx = document.getElementById('statusHeadset').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [<?php foreach ($status as $value) {
                                echo "'" . $value . "',";
                            } ?>],
                datasets: [{
                    label: 'Quantidade de headsets',
                    data: [<?php foreach ($quantidade as $value) {
                                echo $value . ",";
                            } ?>],
                    backgroundColor: [
                        'rgb(75, 192, 192)',
                        'rgb(255, 99, 132)'
                    ],
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }

                },
                plugins: {
                    title: {
                        display: true,
                        text: 'STATUS'
                    }
                },
                maintainAspectRatio: false,

            }
        });
    </script>

    <?php

    $sql = "SELECT situacao, count(*) AS quantidade FROM tb_equipamento WHERE tipo = 'Headset' GROUP BY situacao;";

    $resultado = mysqli_query($strcon, $sql);

    $situacao = array();
    $quantidade = array();
    while ($dados = mysqli_fetch_assoc($resultado)) {
        $situacao[] = $dados['situacao'];
        $quantidade[] = $dados['quantidade'];
    }
    ?>
    <script>
        var ctx = document.getElementById('situacaoHeadset').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: [<?php foreach ($situacao as $value) {
                                echo "'" . $value . "',";
                            } ?>],
                datasets: [{
                    label: 'My First Dataset',
                    data: [<?php foreach ($quantidade as $value) {
                                echo $value . ",";
                            } ?>],
                    backgroundColor: [
                        'rgb(54, 162, 235)',
                        'rgb(255, 205, 86)',
                        'rgb(255, 99, 132)'
                    ],
                    hoverOffset: 4
                }]
            },
            options: {
                plugins: {
                    title: {
                        display: true,
                        text: 'SITUAÇÃO'
                    }
                }
            }
        });
    </script>

<?php
    $sql = "SELECT status, count(*) AS quantidade FROM tb_equipamento WHERE tipo = 'TV' GROUP BY status;";

    $resultado = mysqli_query($strcon, $sql);

    $status = array();
    $quantidade = array();
    while ($dados = mysqli_fetch_assoc($resultado)) {
        $status[] = $dados['status'];
        $quantidade[] = $dados['quantidade'];
    }
    ?>
    <!-- ChartJS -->
    <script>
        var ctx = document.getElementById('statusTV').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [<?php foreach ($status as $value) {
                                echo "'" . $value . "',";
                            } ?>],
                datasets: [{
                    label: "Quantidade de TV's",
                    data: [<?php foreach ($quantidade as $value) {
                                echo $value . ",";
                            } ?>],
                    backgroundColor: [
                        'rgb(75, 192, 192)',
                        'rgb(255, 99, 132)'
                    ],
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }

                },
                plugins: {
                    title: {
                        display: true,
                        text: 'STATUS'
                    }
                },
                maintainAspectRatio: false,

            }
        });
    </script>

    <?php

    $sql = "SELECT situacao, count(*) AS quantidade FROM tb_equipamento WHERE tipo = 'TV' GROUP BY situacao;";

    $resultado = mysqli_query($strcon, $sql);

    $situacao = array();
    $quantidade = array();
    while ($dados = mysqli_fetch_assoc($resultado)) {
        $situacao[] = $dados['situacao'];
        $quantidade[] = $dados['quantidade'];
    }
    ?>
    <script>
        var ctx = document.getElementById('situacaoTV').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: [<?php foreach ($situacao as $value) {
                                echo "'" . $value . "',";
                            } ?>],
                datasets: [{
                    label: 'My First Dataset',
                    data: [<?php foreach ($quantidade as $value) {
                                echo $value . ",";
                            } ?>],
                    backgroundColor: [
                        'rgb(54, 162, 235)',
                        'rgb(255, 205, 86)',
                        'rgb(255, 99, 132)'
                    ],
                    hoverOffset: 4
                }]
            },
            options: {
                plugins: {
                    title: {
                        display: true,
                        text: 'SITUAÇÃO'
                    }
                }
            }
        });
    </script>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
</body>

</html>