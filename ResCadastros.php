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
                    <h1 class="h2"></h1>
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
                <?php
                if (isset($_GET["tabela"]) and $_GET["tabela"] == "cliente") {
                    $nome = $_GET["nome"];
                    $apelido = $_GET["apelido"];
                    $cpf = $_GET["cpf"];
                    $rg = $_GET["rg"];
                    $emissor = $_GET["orgao"];
                    $nascimento = $_GET["nascimento"];
                    $rua = $_GET["rua"];
                    $qd = $_GET["qd"];
                    $lt = $_GET["lt"];
                    $n = $_GET["n"];
                    $bairro = $_GET["bairro"];
                    $complemento = $_GET["comp"];
                    $cidade = $_GET["cidade"];
                    $telefone = $_GET["tel"];
                    $identificacao = $_GET["ide"];
                    $email = $_GET["email"];
                    $pai = $_GET["pai"];
                    $mae = $_GET["mae"];
                    $escolaridade = $_GET["escolaridade"];
                    $responsavel = $_GET["resp"];
                    $informacao = $_GET["informacao"];
                    $sexo = $_GET["sexo"];

                    $sql = " INSERT INTO clientes (nome,apelido,cpf,rg,emissor,Nascimento,rua,qd,lt
                    ,n,bairro,complemento,cidade,telefone,identificacao,email,pai,mae,responsavel
                    ,sexo,escolaridade,observacao) VALUES ('$nome','$apelido','$cpf','$rg','$emissor','$nascimento','$rua','$qd','$lt','$n','$bairro','$complemento','$cidade','$telefone','$identificacao','$email','$pai','$mae','$responsavel','$sexo','$escolaridade','$informacao');";

                    include "conexao.php";

                    if (mysqli_query($conn, $sql)) {
                        echo "<div class='alert alert-success' role='alert'>Cliente Cadastrado com Sucesso!</div>";
                    } else {
                        echo "<div class='alert alert-danger' role='alert'>Erro ao Cadastrar Cliente!</div>";
                    }
                    mysqli_close($conn);
                } else if (isset($_GET["tabela"]) and $_GET["tabela"] == "produto") {
                    $tabela=$_GET["tabela"];
                    $nome=$_GET["nomeP"];
                    $referencia=$_GET["referencia"];
                    $codigo=$_GET["codigo"];
                    $unidade=$_GET["unidade"];
                    $fornecedor=$_GET["fornecedor"];
                    $custo=$_GET["custo"];
                    $pLucro=$_GET["Plucro"];
                    $lucro=$_GET["lucro"];
                    $venda=$_GET["venda"];
                    $qAtual=$_GET["qatual"];
                    $hoje = date('d/m/Y');
                    $sql = " INSERT INTO produtos (nome,referencia,codigo,unidade,fornecedores,custo,venda,quantidade,dataLancamento)
                     VALUES ('$nome','$referencia','$codigo','$unidade','$fornecedor','$custo','$venda',$qAtual,'$hoje');";

                    include "conexao.php";
                    if (mysqli_query($conn, $sql)) {
                        echo "<div class='alert alert-success' role='alert'>Produto Cadastrado com Sucesso!</div>";
                    } else {
                        echo "<div class='alert alert-danger' role='alert'>Erro ao Cadastrar Produto!</div>";
                    }
                    mysqli_close($conn);
                    
                    
                    echo "$sql";
                } else if (isset($_GET["tabela"]) and $_GET["tabela"] == "fornecedor") {
                    echo "iniciar conexão com banco e insert fornecedor";
                } else {
                    echo "<div class='alert alert-danger' role='alert'>
                    ERRO, NÃO ESPERADO... VERIFIQUE COM O DESENVOLVEDOR
                  </div>";
                }
                ?>
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