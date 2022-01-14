<?php 
    include_once "includes/header.php";
    $permiso = "colaboradores"; //cambiar el nombre
    $sqlper = mysqli_query($conexion, 
      "SELECT `estado` FROM `detalle_permisos` WHERE `nom_permiso`='$permiso' && `id_usuario` = '$idusuario'");
    $per = $sqlper->fetch_assoc();
    if(isset($per['estado']) && $per['estado']=='no' && $id != 1 ){
        ?>
        <script type="text/javascript">
          alertify.alert().set({'startMaximized':true, 'message':'<center><b><font size="7" color="red"> Sin permiso para esta seccion</font></b><br><img src="img/alto.png" width="30%" alt=""></center>',
          'onok': function(){ window.location.href = "index.php"; }}).show();
        </script>
        <?php 
    }

?>

<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<!-- Contenido de la página de inicio -->
<div class="container-fluid">

    <center>
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Administradores</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal">
          <i class="fas fa-user-plus fa-lg"></i>
        </button>
        <br><br>
    </center>

     <!-- tabla -->
    <div class="card shadow mb-4" id="tabla" >
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Administradores</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php
                $sql1 ="SELECT * FROM usuarios ";
                $consultap = mysqli_query($conexion, $sql1);
                if($consultap->num_rows === 0) {
                ?>
                <p>no hay datos q mostrar</p>
                <?php
                } else {
                ?> 
                <table class="table table-bordered" id="datatableid" width="100%" cellspacing="0">
                    <thead  style="background-color: #000; color: #fff" >
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Clave</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody style="color: #000" >
                        <?php
                        $contador=0;
                        while($rowedit = mysqli_fetch_array($consultap)){
                        $idus=$rowedit["id"];
                        $nombre = $rowedit["nombre"];
                        $usuario = $rowedit["usuario"];
                        $correo = $rowedit["correo"];
                        $clave = $rowedit["clave"];
                        $tipo = $rowedit["tipo"];
                        $contador++;
                        ?>    
                        <tr >
                        <td><?php echo $contador; ?></td>
                        <td><?php echo $nombre; ?></td>
                        <td><?php echo $usuario; ?></td>
                        <td><?php echo $correo; ?></td>
                        <td><?php echo $clave; ?></td>
                        <td>
                        <!-- onsubmit="return agregarProducto();" 
                        class="btn btn-danger"><i class='fas fa-trash-alt'></i>
                        -->
                        <?php  
                          if ($tipo==1) {
                           echo "<center><font color='green'><b>Super admin</b></font></center>";
                          }else{
                           ?>
                           <center>
                          <a href="rol.php?id=<?php echo $idus; ?>" class="btn btn-info btn-circle"><i class='fas fa-key'></i></a>
 
                          <a class="btn btn-danger btn-circle" onclick="return alertify.confirm('¿Estás seguro de eliminar esta red?', 
                            function(){
                              alertify.success('confirmed');
                              window.location.href = 'control/colaborador.php?id=<?php echo $idus; ?>';
                            }).autoOk(5);" ><i class='fas fa-trash-alt'></i></a>
                            
                            <button type="button" class="btn btn-secondary btn-circle" data-toggle="modal" data-target="#editmodal">
                              <i class="fas fa-edit"></i>
                            </button>

                          </center> 

                           <?php 
                          }
                        ?>

                        </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <?php }?> <!-- fin del else -->
            </div>
        </div>
    </div>
    <!-- Fin de la tabla  -->

</div>
<!-- /.container-fluid -->

<!-- Modal agregar-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo administrador</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" onsubmit="return NewColaborador();" method="post" novalidate>

            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationCustom03">Nombre</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Nombre" required>
                <div class="invalid-feedback">
                  Por favor ingrese nombre
                </div>
              </div>
               
              <div class="col-md-6 mb-3">
                <label for="nomus">Nombre de usuario</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                  </div>
                  <input type="text" class="form-control" id="nomus" name="nomus" placeholder="Nombre de usuario" aria-describedby="inputGroupPrepend2" required>
                  <div class="invalid-feedback">
                  Por favor ingrese nombre de usuario
                  </div>
                </div>
              </div>

            </div>
            <div class="form-row">
            <div class="col-md-12 mb-3">
              <label for="validationCustom03">Correo</label>
              <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo" required>
              <div class="invalid-feedback">
                Por favor ingrese un correo
              </div>
            </div>
            </div>
            <div class="form-row">
            <div class="col-md-12 mb-3">
              <label for="validationCustom03">Contraseña</label>
              <input type="password" class="form-control" id="contra" name="contra" placeholder="Contraseña" required>
              <div class="invalid-feedback">
                Por favor ingrese una contraseña
              </div>
            </div>      
            </div>     
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="submit" name="updatedata" class="btn btn-primary">Registrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal editar-->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar administrador</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" onsubmit="return ;" method="post" novalidate>

            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationCustom03">Nombre</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Nombre" required>
                <div class="invalid-feedback">
                  Por favor ingrese nombre
                </div>
              </div>
               
              <div class="col-md-6 mb-3">
                <label for="nomus">Nombre de usuario</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                  </div>
                  <input type="text" class="form-control" id="nomus" name="nomus" placeholder="Nombre de usuario" aria-describedby="inputGroupPrepend2" required>
                  <div class="invalid-feedback">
                  Por favor ingrese nombre de usuario
                  </div>
                </div>
              </div>

            </div>
            <div class="form-row">
            <div class="col-md-12 mb-3">
              <label for="validationCustom03">Correo</label>
              <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo" required>
              <div class="invalid-feedback">
                Por favor ingrese un correo
              </div>
            </div>
            </div>
            <div class="form-row">
            <div class="col-md-12 mb-3">
              <label for="validationCustom03">Contraseña</label>
              <input type="password" class="form-control" id="contra" name="contra" placeholder="Contraseña" required>
              <div class="invalid-feedback">
                Por favor ingrese una contraseña
              </div>
            </div>      
            </div>     
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="submit" name="updatedata" class="btn btn-primary">Registrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>






<!-- validacion -->
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
</script>
<?php include_once "includes/footer.php"; ?>

