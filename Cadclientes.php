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
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
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
                    <h1 class="h2">Cadastro de Clientes</h1>
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

                <div class=" shadow p-3 mb-5 bg-body-tertiary rounded container">
                    <div class="shadow-sm p-3 mb-1 bg-body-tertiary rounded">Novo Cliente - Dados Principais</div>
                    <!--grupo-->
                    <div class="row">
                        <!--linha-->
                        <div class="col-6">
                            <!--colunas-->
                            <div class="form-group">
                                <label for="nomeCliente">Nome:
                                    <input type="text" name="nome" id="nomeCliente" placeholder="Digite o Nome"
                                        class="form-control">
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="rg">RG:<input type="text" name="rg" id="rg" placeholder="Digite o Nome"
                                        class="form-control"></label>
                            </div>
                        </div>
                        <div class="col-3">
                            <!--colunas-->
                            <div class="form-group">
                                <label for="apelido">Apelido:<input type="text" name="apelido" id="apelido"
                                        placeholder="Digite o Nome" class="form-control"></label>
                            </div>
                            <div class="form-group">
                                <label for="emissor">Orgão Emissor:<input type="text" name="Emissor" id="emissor"
                                        placeholder="Digite o Nome" class="form-control"></label>
                            </div>

                        </div>
                        <div class="col-3">
                            <!--colunas-->
                            <div class="form-group">
                                <label for="cpf">CPF:<input type="text" name="cpf" id="cpf" placeholder="Digite o Nome"
                                        class="form-control"></label>
                            </div>
                            <div class="form-group">
                                <label for="nascimento">Data de Nascimento:<input type="text" name="nascimento"
                                        id="nascimento" placeholder="Digite o Nome" class="form-control"></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" shadow p-3 mb-5 bg-body-tertiary rounded container">
                    <div class="shadow-sm p-3 mb-1 bg-body-tertiary rounded">Endereço:</div>
                    <!--grupo-->
                    <div class="row">
                        <!--linha-->
                        <div class="col-3">
                            <!--colunas-->
                            <div class="form-group">
                                <label for="rua">Rua:
                                    <input type="text" name="rua" id="rua" placeholder="Digite o Nome"
                                        class="form-control">
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="bairro">Bairro:
                                    <input type="text" name="bairro" id="bairro" placeholder="Digite o Nome"
                                        class="form-control">
                                </label>
                            </div>
                        </div>
                        <div class="col-3">
                            <!--colunas-->
                            <div class="form-group">
                                <label for="qd">QD:
                                    <input type="text" name="qd" id="qd" placeholder="Digite o Nome"
                                        class="form-control">
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="complemento">Complemento:
                                    <input type="text" name="complemento" id="complemento" placeholder="Digite o Nome"
                                        class="form-control">
                                </label>
                            </div>
                        </div>
                        <div class="col-3">
                            <!--colunas-->
                            <div class="form-group">
                                <label for="lt">LT:
                                    <input type="text" name="lt" id="lt" placeholder="Digite o Nome"
                                        class="form-control">
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="cidade">Cidade:
                                    <input type="text" name="cidade" id="cidade" placeholder="Digite o Nome"
                                        class="form-control">
                                </label>
                            </div>
                        </div>
                        <div class="col-3">
                            <!--colunas-->
                            <div class="form-group">
                                <label for="numero">N°:
                                    <input type="text" name="numero" id="numero" placeholder="Digite o Nome"
                                        class="form-control">
                                </label>
                            </div>

                        </div>
                    </div>
                </div>

                <div class=" shadow p-3 mb-5 bg-body-tertiary rounded container">
                    <div class="shadow-sm p-3 mb-1 bg-body-tertiary rounded">Contato:</div>
                    <div class="row">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-6">
                                    <label for="telefone">Telefone:
                                        <input type="text" name="telefone" id="telefone" placeholder="Digite o Nome"
                                            class="form-control">
                                    </label>
                                </div>
                                <div class="col-6">
                                    <label for="identificacao">Identificação:
                                        <input type="text" name="identificacao" id="identificacao"
                                            placeholder="Digite o Nome" class="form-control">
                                    </label>
                                </div>
                            </div>

                        </div>
                        <div class="col-6">
                            <label for="email">Email:
                                <input type="text" name="email" id="email" placeholder="Digite o Nome"
                                    class="form-control">
                            </label>
                        </div>
                    </div>
                </div>


                <div class="shadow p-3 mb-5 bg-body-tertiary rounded container">
                    <div class="shadow-sm p-3 mb-1 bg-bod-tertiary rounded">Outros Dados:</div>
                    <div class="row">
                        <div class="col-6">
                            <label for="pai">Nome do Pai:
                                <input type="text" name="pai" id="pai" placeholder="Digite o Nome" class="form-control">
                            </label>
                        </div>
                        <div class="col-6">
                            <label for="mae">Nome da Mãe:
                                <input type="text" name="mae" id="mae" placeholder="Digite o Nome" class="form-control">
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="responsavel">Nome do Responsavel:
                                <input type="text" name="responsavel" id="responsavel" placeholder="Digite o Nome"
                                    class="form-control">
                            </label>
                        </div>
                        <div class="col-6">
                            <label for="sexo">Sexo:
                                <input type="text" name="sexo" id="sexo" placeholder="Digite o Nome"
                                    class="form-control">
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="escolaridade">Escolaridade:
                                <input type="text" name="escolaridade" id="escolaridade" placeholder="Digite o Nome"
                                    class="form-control">
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="informacao">Observações importante:
                                <input type="text" name="informacao" id="informacao"
                                    placeholder="Digite informações Ex: 2º telefone, Proximidade, Referências Comerciais."
                                    class="form-control">
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <!--alerta-->
                    <div class="alert alert-danger d-none" role="alert">ERRO: Preencha todos os campos</div>

                <!-- The Modal -->
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Cadastro</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                Modal body..
                                <?php
                                echo "teste";
                                ?>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>

        </div>
        <div class="shadow p-3 mb-5 bg-body-tertiary rounded Container">
            <div class="form-group center text-center">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Enviar</button>
                <a class="btn btn-secondary" href="clientes.php" role="button">Cancelar</a>
                <button type="submit" class="btn btn-light">Limpar</button>
            </div>
        </div>

    </div>
    </div>
    <!--menu-->
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