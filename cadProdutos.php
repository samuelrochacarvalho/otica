<?php

if ((isset($_GET['acao'])) && $_GET['acao'] == "editar" && (isset($_GET['id']))) {
    include "conexao.php";
    $acao = $_GET['acao'];
    $id = $_GET['id'];

    $sql = "select * from produtos where id_Produtos = '$id';";
    $resultado = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($resultado);
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Dashboard Template · Bootstrap v5.3</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">
    <link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="js/maskCPF.js"></script>
    <script>
        var loadFile = function (event) {
            var output = document.getElementById('imgArmacao');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function () {
                URL.revokeObjectURL(output.src) // free memory
            }

        };
    </script>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Otica Rio Trombas</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="#">Sign out</a>
            </div>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3 sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">
                                <span data-feather="home" class="align-text-bottom"></span>
                                Painel de Informações
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="clientes.php">
                                <span data-feather="file" class="align-text-bottom"></span>
                                Clientes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="produtos.php">
                                <span data-feather="shopping-cart" class="align-text-bottom"></span>
                                Produtos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="users" class="align-text-bottom"></span>
                                Ordem de Serviço
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                                Venda
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="layers" class="align-text-bottom"></span>
                                Etapas O.S
                            </a>
                        </li>
                    </ul>

                    <h6
                        class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
                        <span>Outros</span>
                        <a class="link-secondary" href="#" aria-label="Add a new report">
                            <!--<span data-feather="plus-circle" class="align-text-bottom"></span>-->
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text" class="align-text-bottom"></span>
                                Relatorios
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text" class="align-text-bottom"></span>
                                Financeiro
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text" class="align-text-bottom"></span>
                                Estoque
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text" class="align-text-bottom"></span>
                                Cadastro de Funcionario
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text" class="align-text-bottom"></span>
                                SUPORTE
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Cadastro de Produtos</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                            <span data-feather="calendar" class="align-text-bottom"></span>
                            This week
                        </button>
                    </div>
                </div>
                <!--Pagina inicio-->
                <form action="ResCadastros.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="tabela" id="tabela" value="produto" class="form-control">
                    <div class=" shadow p-3 mb-5 bg-body-tertiary rounded container">
                        <div class="shadow-sm p-3 mb-1 bg-body-tertiary rounded">Novo Produto</div>
                        <div class="row">
                            <!--linha-->
                            <div class="col-3">
                                <!--colunas1-->
                                <div class="input-group">
                                    <div class="card" style="width: 14rem;">
                                        <img id="imgArmacao" name="imgArmacao" src="<?php if (isset($_GET['id']) && $row['caminho'] == "") {
                                            echo "/fotos/" . $row['caminho'];
                                        } else {
                                            
                                            echo "/fotos/padrao.png";
                                        }?>"
                                            class="card-img-top">
                                        <div class="card-body">
                                            <div class="input-group mb-3">
                                                <?php
                                                if(isset($_GET['id'])&&isset($_GET['acao']) && $acao == "editar"){
                                                    echo "<input type='hidden' id='fileName' name='fileName' class='form-control'/>";
                                                }else{
                                                    echo "<input type='file' name='fileName' id='fileName' accept='image/*' onchange='loadFile(event)'>";
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5">
                                <!--colunas2-->
                                <div class="input-group">
                                    <span class="input-group-text" for="nome" id="nome">Nome do Produto:</span>
                                    <input type="text" id="nome" name="nome" class="form-control" value="<?php if (isset($_GET['id'])) {
                                        echo $row['nome'];
                                    } ?>">
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-text" for="referencia" id="referencia">Referencia:</span>
                                    <input type="text" id="referencia" name="referencia" id="referencia"
                                        class="form-control" value="<?php if (isset($_GET['id'])) {
                                            echo $row['referencia'];
                                        } ?>">
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-text" for="codigo" id="codigo">Codigo (GTIN EAN-13):</span>
                                    <input type="text" id="codigo" name="codigo" class="form-control" value="<?php if (isset($_GET['id'])) {
                                        echo $row['codigo'];
                                    } ?>">
                                </div>
                            </div>
                            <div class="col-4">
                                <!--colunas3-->
                                <div class="input-group">
                                    <span class="input-group-text" for="unidade">Unidade:</span>
                                    <select class="form-select" name="unidade" id="unidade">
                                        <option value="">Selecione</option>
                                        <option value="1" <?php if (isset($_GET['id']) && ($row['unidade'] == "1")) {
                                            echo "selected";
                                        } ?>>Par
                                        </option>
                                        <option value="2" <?php if (isset($_GET['id']) && ($row['unidade'] == "2")) {
                                            echo "selected";
                                        } ?>>Unico
                                        </option>
                                        <option value="3" <?php if (isset($_GET['id']) && ($row['unidade'] == "3")) {
                                            echo "selected";
                                        } ?>>
                                            ml(Mililitro)</option>
                                    </select>
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-text" for="quantidade" id="quantidade">Quantidade:</span>
                                    <input type="text" id="quantidade" name="quantidade" class="form-control" value="<?php if (isset($_GET['id'])) {
                                        echo $row['quantidade'];
                                    } ?>">
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-text" for="fornecedor" id="fornecedor">FORNECEDOR:</span>
                                    <select class="form-select" name="fornecedor" id="fornecedor">
                                        <option value="">Selecione</option>
                                        <option value="Dilucas" <?php if (isset($_GET['id']) && ($row['fornecedores'] == "1")) {
                                            echo "selected";
                                        } ?>>
                                            Dilucas</option>
                                        <option value="Rayban" <?php if (isset($_GET['id']) && ($row['fornecedores'] == "2")) {
                                            echo "selected";
                                        } ?>>
                                            Rayban</option>
                                        <option value="Fiamma" <?php if (isset($_GET['id']) && ($row['fornecedores'] == "3")) {
                                            echo "selected";
                                        } ?>>
                                            Fiamma</option>
                                        <option value="Lavorato" <?php if (isset($_GET['id']) && ($row['fornecedores'] == "4")) {
                                            echo "selected";
                                        } ?>>
                                            Lavorato</option>
                                        <option value="Cadri" <?php if (isset($_GET['id']) && ($row['fornecedores'] == "5")) {
                                            echo "selected";
                                        } ?>>
                                            Cadri</option>
                                        <option value="Fahi" <?php if (isset($_GET['id']) && ($row['fornecedores'] == "6")) {
                                            echo "selected";
                                        } ?>>
                                            Fahi</option>
                                        <option value="DG" <?php if (isset($_GET['id']) && ($row['fornecedores'] == "7")) {
                                            echo "selected";
                                        } ?>>
                                            DG</option>
                                        <option value="GRAZI" <?php if (isset($_GET['id']) && ($row['fornecedores'] == "8")) {
                                            echo "selected";
                                        } ?>>
                                            GRAZI</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" shadow p-3 mb-5 bg-body-tertiary rounded container">
                        <div class="shadow-sm p-3 mb-1 bg-body-tertiary rounded">Informações de Preço e Estoque</div>
                        <table class="table table-success table-striped-columns">
                            <tbody>
                                <tr>
                                    <td for="custo">Custo R$</td>
                                    <td for="Plucro">% Lucro</td>
                                    <td for="lucro">Lucro</td>
                                    <td for="venda">Venda R$</td>
                                    <td for="qatual">Qtd Atual</td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td><input type="text" id="custo" name="custo" class="form-control" value="<?php if (isset($_GET['id'])) {
                                        echo $row['custo'];
                                    } ?>" placeholder="0,00"></td>
                                    <td><input type="text" id="Plucro" name="Plucro" class="form-control"
                                           disabled placeholder="0 %"></td>
                                    <td><input type="text" id="lucro" name="lucro" class="form-control" disabled
                                            placeholder="0,00 R$"></td>
                                    <td><input type="text" id="venda" name="venda" class="form-control" value="<?php if (isset($_GET['id'])) {
                                        echo $row['venda'];
                                    } ?>" placeholder="0,00 R$"></td>
                                    <td><input type="text" id="qatual" name="qatual" class="form-control"
                                            placeholder="0" disabled></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                        <div class="shadow-sm p-3 mb-1 bg-body-tertiary rounded">
                            <div class="form-group center text-center">
                                <button type="submit" name="moveFile" class="btn btn-primary">Enviar</button>
                                <a class="btn btn-secondary" href="produtos.php" role="button">Cancelar</a>
                                <button type="submit" class="btn btn-light">Limpar</button>
                            </div>
                        </div>
        </div>
        <div class="form-group">
            <div class="alert alert-danger d-none" role="alert">ERRO: Preencha todos os campos</div>
        </div>
        </form>
        <!--fechamento de linha-->
    </div>

    </div>
    <!--fim do container pagina-->





    </div>
    <!--fim pagina-->



    <!--botões-->
    <div>
        </main>
        <!--<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>-->
    </div>
    </div>
    <!-- icones-->
    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
        </script>
    <script src="dashboard.js"></script>
</body>

</html>