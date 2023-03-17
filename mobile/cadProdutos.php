<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Blank</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="js/calculos.js"></script>
    <script>
        var loadFile = function (event) {
            var output = document.getElementById('imgArmacao');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function () {
                URL.revokeObjectURL(output.src) // free memory
            }

        };
    </script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Inicio</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Cadastros</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Cadastros:</h6>
                        <a class="collapse-item" href="cadClientes.php">Clientes</a>
                        <a class="collapse-item" href="CadProdutos.php">Produtos</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Outros
            </div>

            <!-- Nav Item - Pages Collapse Menu -->

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Relatorios</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tabelas</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <form action="Cadastros.php" method="post" enctype="multipart/form-data">
            <!-- Main Content -->
            <div id="content">
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="card" style="width: 20rem;">
                            <img id="imgArmacao" name="imgArmacao" src="../fotos/padrao.jpeg" class="card-img-top">
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <input type='file' name='fileName' id='fileName' accept='image/*' onchange='loadFile(event)'/>
                                </div>
                            </div>
                    </div>

                    <div class="mb-3">
                        <label for="nomeProduto" class="form-label">Nome do Produto</label>
                        <input type="text" class="form-control" name="nomeProduto" id="nomeProduto" placeholder="Ex: Armação Acettato">
                    </div>

                    <div class="mb-3">
                        <label for="referencia" class="form-label">Referencia</label>
                        <input type="text" class="form-control" name="referencia" id="referencia" placeholder="Ex: 3445F4 C7">
                    </div>

                    <div class="mb-3">
                        <label for="quantidade" class="form-label">Quantidade:</label>
                        <input type="number" class="form-control" name="quantidade" id="quantidade" placeholder="Ex: nº 1">
                    </div>

                    <div class="mb-3">
                        <label for="fornecedores" class="form-label">Fornecedores:</label>
                        <select class="form-control" id="fornecedores" name="fornecedores" aria-label="Default select example">
                            <option value="" selected>Selecione</option>
                            <option value="1">DiLuccas</option>
                            <option value="2">Rayban</option>
                            <option value="3">Fiamma</option>
                            <option value="3">Lavorato</option>
                            <option value="3">Cadri</option>
                            <option value="3">Fahi</option>
                            <option value="3">DG</option>
                            <option value="3">Grazi</option>
                        </select>
                    </div>
                    <hr>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="valorVenda" class="form-label">Valor de Venda</label>
                                    <input type="number" class="form-control" id="valorVenda" name="valorVenda" placeholder="0,00 R$"
                                        oninput="margem(this)">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="valorCusto" class="form-label">Valor de Custo</label>
                                    <input type="number" class="form-control" id="valorCusto" name="valorCusto" placeholder="0,00 R$"
                                        oninput="margem(this)">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="margemLucro" class="form-label">Margem de Lucro %</label>
                                    <input type="text" class="form-control" id="margemLucroP" placeholder="0,00 R$"
                                        disabled>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="margemLucroR" class="form-label">Margem de Lucro R$</label>
                                    <input type="text" class="form-control" id="margemLucroR" placeholder="0,00 R$"
                                        disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <input type="submit" name="moveFile" class="btn btn-success"value="Submit">
                            </div>
                            <div class="col">
                                <a type="button" href="index.html" class="btn btn-danger">Cancelar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>