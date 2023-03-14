<!doctype html>
<html lang="en">
<?php
date_default_timezone_set('America/Sao_Paulo');
$date = date('Y-m-d');
?>
<?php
include "conexao.php";
$produto = "";
?>

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
                    <h1 class="h2">Cadastro de Vendas</h1>
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
                <form action="#" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="tabela" id="tabela" value="produto" class="form-control">


                    <div class=" shadow p-3 mb-5 bg-body-tertiary rounded container">
                        <div class="shadow-sm p-3 mb-1 bg-body-tertiary rounded">Produto e Serviços O.S</div>
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput" class="form-label">Empresa Otica:</label>
                                        <select class="form-select">
                                            <option value="">Selecione</option>
                                            <option value="trombas">Otica Rio Trombas</option>
                                            <option value="montividiu">Otica Rio Montividiu</option>
                                            <option value="formoso">Otica Rio Formoso</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput" class="form-label">Data da Venda:</label>
                                        <input type="date" class="form-control" id="formGroupExampleInput"
                                            placeholder="Example input placeholder" value=<?php echo $date; ?>></input>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion" id="chapters">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading-5">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#chapter-5" aria-expanded="false"
                                            aria-controls="chapter-5">
                                            Importar O.S
                                        </button>
                                    </h2>
                                    <div id="chapter-5" class="accordion-collapse collapse" aria-labelledby="heading-5"
                                        data-bs-parent="#chapters">
                                        <div class="accordion-body">
                                            <div class="input-group mb-3">
                                                <input type="file" class="form-control" id="inputGroupFile01">
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="input-group flex-nowrap">
                                                        <span class="input-group-text" id="addon-wrapping"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-search"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                            </svg></span>
                                                        <input type="text" class="form-control"
                                                            placeholder="Pesquise por numero de O.S, Nome do Cliente, ou CPF">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <label for="formGroupExampleInput"
                                                            class="form-label">Observações:</label>
                                                        <div class="form-floating">
                                                            <textarea class="form-control"
                                                                placeholder="Leave a comment here"
                                                                id="floatingTextarea"></textarea>
                                                            <label for="floatingTextarea">Tipo de Lente, Datas de
                                                                Entregas e outros dados Relevantes.</label>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" shadow p-3 mb-5 bg-body-tertiary rounded container">
                        <div class="shadow-sm p-3 mb-1 bg-body-tertiary rounded">Produto e Serviços</div>
                        <div class="row">
                            <div class="col-6">
                                <div class="input-group">
                                    <input class="form-control" type="search"
                                        placeholder="Pesquisa Produtos por Nome, referencia" list="Lprodutos"
                                        name="produto" id="produto" onchange="teste();">

                                    <datalist id="Lprodutos">
                                        <?php
                                        $sql = "select * from produtos";
                                        $query_run = mysqli_query($conn, $sql);
                                        if (mysqli_num_rows($query_run) > 0) {
                                            foreach ($query_run as $produto) {
                                                echo "<option  value='" . $produto['nome'] . " ,codigo:" . $produto['id_Produtos'] . "'>" . " Id interno:" . $produto['id_Produtos'] . " Referencia:" . $produto['referencia'] . " Preço: " . $produto['venda'] . " R$ QTD: " . $produto['quantidade'] . " </option>";
                                            }
                                        }
                                        ?>
                                    </datalist>
                                    <?php
                                    print_r("<div id='resultado'class='resultado' hidden></div>");
                                    ?>
                                    <div class="input-group-append">
                                        <div class="input-group-text" style="background-color: #FFF"><i
                                                class="fas fa-search"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group">
                                    <div class="input-group-append">
                                        <div class="input-group-text" style="background-color: #FFF"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                                            </svg></div>
                                    </div>
                                    <input type="number" class="form-control" id="quant" name="quant"
                                        placeholder="quantidade">
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group">
                                    <div class="input-group-append">
                                        <div class="input-group-text" style="background-color: #FFF"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                                                <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" />
                                                <path
                                                    d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z" />
                                            </svg></div>
                                    </div>
                                    <input type="number" id="Pvenda" name="Pvenda" class="form-control"
                                        placeholder="preço de venda">
                                </div>
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-outline-secondary" class="btn btn-info"
                                    data-bs-toggle="collapse" data-bs-target="#chapter-Venda" onclick="carrinho();">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-cash" viewBox="0 0 16 16">
                                        <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"></path>
                                        <path
                                            d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z">
                                        </path>
                                    </svg>
                                    adicionar item
                                </button>
                            </div>
                        </div>
                        <br>
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <table class="table caption-top">
                                        <thead>
                                            <tr>
                                                <th scope="col">Tipo / Nome / Referencia / Produto ou Serviço</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="col">
                                    <table class="table caption-top">
                                        <thead>
                                            <tr>
                                                <th scope="col">Qtd</th>
                                                <th scope="col">Val. Unit. Acre/Desc</th>
                                                <th scope="col">Val. Un. Liq.</th>
                                                <th scope="col">Val. Total</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="accordion" id="chapters">
                            <div class="accordion-item">
                                <div id="chapter-Venda" class="accordion-collapse collapse" aria-labelledby="heading-5"
                                    data-bs-parent="#chapters">
                                    <div class="accordion-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col">
                                                    <div id="prodV">
                                                        
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    valores da tabela aqui
                                                </div>
                                            </div>
                                            <br><br>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col">
                                                    </div>
                                                    <div class="col">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <b> Valor Líquido:</b>
                                                                </div>
                                                                <div class="col">
                                                                    <p style="text-align: right;">Valor Liquido</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <b> Desconto:</b>
                                                                </div>
                                                                <div class="col">
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                                <div class="col">
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <b>Acréscimo:</b>
                                                                </div>
                                                                <div class="col">
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                                <div class="col">
                                                                    <input type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <b>Valor Total:</b>
                                                                </div>
                                                                <div class="col">
                                                                    <p style="text-align: right;">Valor Total</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" shadow p-3 mb-5 bg-body-tertiary rounded container">
                        <div class="shadow-sm p-3 mb-1 bg-body-tertiary rounded">Finalização-Cliente</div>
                    </div>
                </form>
                <!--fechamento de linha-->
            </main>
        </div>
    </div>
    <!--fim do container pagina-->
    <!--fim pagina-->
    <!--botões-->
    <!--<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>-->
    <!-- icones-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <script type="text/javascript" src="personalizado.js"></script>
</body>

</html>