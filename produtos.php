<!doctype html>
<html>
<?php
 include "conexao.php";
?>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/maskCPF.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/bootstrap.css" rel="stylesheet">
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
                                Painel de Informa????es
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
                                Ordem de Servi??o
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="venda.php">
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
                
            <div class="container">
                        <div class="row">
                            <div class="col-md-auto">
                                <h1 class="h3">Produtos</h1>
                            </div>
                            <div class="col">
                                <div class="input-group">
                                    <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                            <path
                                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                        </svg></span>
                                    <input type="text" list="produto" class="form-control" id="pesquisa" name="pesquisa"
                                        onchange="location = '?pesquisa=true&valor='+this.value;" />
                                    <datalist id="produto">
                                        <?php
                                        $sql = "select * from produtos";
                                        $query_run = mysqli_query($conn, $sql);

                                        if (mysqli_num_rows($query_run) > 0) {
                                            foreach ($query_run as $produto) {
                                                echo "<option  value='" . $produto['nome'] . "'>" . $produto['referencia'] . " </option>";
                                            }
                                        }
                                        ?>
                                    </datalist>
                                    <button class="btn btn-outline-success" type="button"
                                        id="button-addon2">Pesquisar</button>
                                </div>
                            </div>
                            <div class="col-md-auto">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Pagina inicio-->

                <body>
                    
                    <div class="container mt-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Lista de Produtos
                                            <a href="cadProdutos.php" class="btn btn-primary float-end">Novo Produto</a>
                                        </h4>
                                    </div>
                                    <div class="card-body">

                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nome</th>
                                                    <th>Ref.</th>
                                                    <th>Fornecedores</th>
                                                    <th>Custo $</th>
                                                    <th>Venda $</th>
                                                    <th>Quant</th>
                                                    <th>Dt Entrada</th>
                                                    <th>A????o</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                            if(isset($_GET['valor'])&&isset($_GET['pesquisa'])){
                                                $valor=$_GET['valor'];
                                                $query = "SELECT * FROM produtos where nome like '%$valor%' or referencia like '%$valor%' or fornecedores like '%$valor%' ";
                                            }else{
                                                $query = "SELECT * FROM produtos";
                                            }
                                                
                                                
                                                $query_run = mysqli_query($conn, $query);
                                                if (mysqli_num_rows($query_run) > 0) {
                                                    foreach ($query_run as $student) {
                                                        ?>
                                                        <tr>
                                                            <td>
                                                                <?= $student['id_Produtos']; ?>
                                                            </td>
                                                            <td>
                                                                <?= $student['nome']; ?>
                                                            </td>
                                                            <td>
                                                                <?= $student['referencia']; ?>
                                                            </td>
                                                            
                                                            <td>
                                                                <?=$student['fornecedores']; ?>
                                                            </td>
                                                            <td><?= $student['custo']; ?></td>
                                                            <td><?= $student['venda']; ?></td>
                                                            <td><?= $student['quantidade']; ?></td>
                                                            <td><?= $student['dataLancamento']; ?></td>
                                                            <td>
                                                            <a href="?visualizar=true&id=<?= $student['id_Produtos']; ?>"
                                                                    class="btn btn-info btn-sm">Visualizar</a>
                                                                <a href="CadProdutos.php?acao=editar&id=<?= $student['id_Produtos']; ?>"
                                                                    class="btn btn-success btn-sm">Editar</a>
                                                                <a href="?excluir=true&id=<?= $student['id_Produtos']; ?>"
                                                                    class="btn btn-danger btn-sm">Deletar</a>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                    }
                                                } else {
                                                    echo "<h5> Nenhum Produto Cadastrado </h5>";
                                                }
                                                ?>

                                            </tbody>
                                        </table>
                                        <?php
                                        if (isset($_GET["excluir"]) && isset($_GET['id'])) {
                                            include "conexao.php";
                                            $id = $_GET['id'];
                                            $sql = "DELETE FROM produtos WHERE (id_Produtos = '$id');";

                                            if (mysqli_query($conn, $sql)) {
                                                echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=produtos.php?DELETADO'>";
                                            } else {
                                                echo "<div class='alert alert-danger' role='alert'>Erro ao Deletar Cliente!</div>";
                                            }
                                            mysqli_close($conn);
                                        }
                                        if (isset($_GET['DELETADO'])) {
                                            echo "<div class='alert alert-success' role='alert'>Produtos Deletado com Sucesso!</div>";
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--menu-->
            </main>
            <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Produto</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php
                    include "ProdutoModal.php";
                    ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" disabled>OK</button>
                </div>
            </div>
        </div>
    </div>

    <?php
    if (isset($_GET['visualizar']) && isset($_GET['id'])) {
        echo "<script>var myModal = new bootstrap.Modal(document.getElementById('exampleModal'), {});
        document.onreadystatechange = function () {
            myModal.show();
        };</script>";

    }
    ?>
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