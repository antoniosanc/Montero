<?php include_once "includes/header.php"; ?>

<!-- Contenido de la página de inicio -->
<div class="container-fluid">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-center mb-4">
            <img src="img/coffe.gif" width="10%"  ><h1 class=" h2 mb-0 tituloscafe"> Pagina principal </h1><img src="img/coffe.gif" width="10%"  >

        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card cajasindex shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center " >
                            <div class="col mr-2">
                                <div class="text-xl font-weight-bold text-dark text-uppercase mb-1">
                                    Productos</div>
                                    <center>
                                <div class="h6 mb-0 font-weight-bold text-info "> Total: 10</div></center>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-shopping-basket fa-2x textocafe"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card cajasindex shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xl font-weight-bold text-dark text-uppercase mb-1">
                                    Pedidos</div>
                                    <center>
                                <div class="h6 mb-0 font-weight-bold text-success "> Espera: 10</div></center>
                            </div>

                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x textocafe"></i>
                                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card cajasindex shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xl font-weight-bold text-dark text-uppercase mb-1">Clientes
                                </div>
                                 
                                     <center>
                                <div class="h6 mb-0 font-weight-bold text-info "> Total: 10</div></center>
                                 
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x textocafe"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card cajasindex shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xl font-weight-bold text-dark text-uppercase mb-1">
                                    Galeria</div>
                                <center>
                                <div class="h6 mb-0 font-weight-bold text-success "> Total: 10</div></center>
                            </div>
                            <div class="col-auto">
                                <i class="far fa-images fa-2x textocafe"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Row -->

        <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-6  " align="center">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Datos de la cuenta</h6>
                         
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area">
                            <?php 
                               echo "Id: ".$idusuario."<br>";
                               echo "Nombre: ".$nombreusuario."<br>";
                               echo "Nombre usuario: ".$nomus."<br>";
                               echo "Correo: ".$correousuario."<br>";
                               echo "Clave: ".$claveusuario."<br>";
                                
                             ?>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- /.container-fluid -->

<?php include_once "includes/footer.php"; ?>

