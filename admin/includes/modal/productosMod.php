<?php require_once "../conexion.php"; ?>
 
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
<!-- Modal agregar-->
<div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">  
    <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header"  >
               Ingresa los datos del producto 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="container">
                <div class="row"  >     
                    <form style="width: 100%" action="control/producto.php" name="insertproduct" method="post" enctype="multipart/form-data" class="needs-validation" novalidate >

                        <div class="form-row" align="center">
                            <!-- Nombre (producto)-->
                            <div class="col-md-6 mb-3">
                              <label for="validationCustom01" class="etiqueta">Nombre del producto</label>
                              <input type="text" class="form-control" id="validationCustom01" name="producto" placeholder="Ingresa el nombre del producto" required>
                              <div class="invalid-feedback">
                                Ingresa el nombre del producto
                              </div>
                            </div>
                            <!-- Nombre -->
                            <!-- Categoria (categoria)-->
                            <div class="col-md-6 mb-3">
                              <label for="validationCustom02" class="etiqueta">Categoria</label>
                                <select class="form-control" id="validationCustom02" name="categoria"  required>
                                    <option value="">Seleccione categoria</option> 
                                    <?php $query=mysqli_query($conexion,"select * from categoria");
                                    while($row=mysqli_fetch_array($query)){?>
                                    <option value="<?php echo $row['nombre'];?>"><?php echo $row['nombre'];?></option>
                                    <?php } ?>
                                </select>
                              <div class="invalid-feedback">
                                Seleccione una categoria
                              </div>
                            </div>
                            <!-- Categoria -->
                        </div>

                        <div class="form-row" align="center">
                            <!-- Nombre (presentacion)-->
                            <div class="col-md-6 mb-3">
                              <label for="validationCustom03" class="etiqueta">Presentación del producto</label>
                              <input type="text" class="form-control" id="validationCustom03" name="presentacion" placeholder="ej. polvo, grano .. etc" required>
                              <div class="invalid-feedback">
                                Ingresa la presentación
                              </div>
                            </div>
                            <!-- Nombre -->
                            <!-- Categoria (stock)-->
                            <div class="col-md-6 mb-3">
                              <label for="validationCustom04" class="etiqueta">Disponibilidad de Producto</label>
                                <select class="form-control" id="validationCustom04" name="stock"  required>
                                    <option value="">Seleccionar</option>
                                    <option value="En Stock">En Stock</option>
                                    <option value="Fuera de Stock">Fuera de Stock</option>
                                </select>
                              <div class="invalid-feedback">
                                Seleccione una categoria
                              </div>
                            </div>
                            <!-- Categoria -->
                        </div>

                        <!-- Categoria (descri)-->
                        <div class="form-row" align="center">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom07" class="etiqueta">Descripción del producto</label>
                                <textarea class="form-control" id="validationCustom07" rows="4" name="descri" required ></textarea>
                                 <div class="invalid-feedback">
                                        Ingresa una descripción
                                  </div>
                              </div>
                        </div> 

                        <div class="form-row " align="center">
                            <!-- Categoria (precio)-->
                            <div class="col-md-6 mb-3"  >
                                <label for="validationCustom05" class="etiqueta">Costo del producto</label>
                                <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                  </div>
                                  <input type="text" class="form-control"  id="validationCustom05" name="precio"  required>
                                  <div class="invalid-feedback">
                                    Ingresa un precio
                                </div>
                                </div>  
                            </div>
                            <!-- Categoria -->
                            <!-- Categoria (descuento)-->
                            <div class="col-md-6 mb-3">
                              <label for="validationCustom06" class="etiqueta">Descuento del producto</label>
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control"  id="validationCustom06" name="descuento"  required>
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">%</span>
                                  </div>
                                  <div class="invalid-feedback">
                                    Ingresa un desceunto, si no hay descuento ingresa 0
                                  </div>
                                </div>
                            </div>
                            <!-- Categoria -->
                             
                        </div>

                         
                        <div class="form-row" align="center">
                            <!-- img1 (img1)-->
                            <div class="col-md-12 mb-3">
                                <label  class="etiqueta"for="basicinput" >Imagen 01 del producto</label>
                                <div class="controls">
                                <input type="file"   id="productimage1" class="span8 tip" name="img1" required>
                                </div>
                              <div class="invalid-feedback">
                                Ingresa una imagen
                              </div>
                            </div>
                            <!-- img -->
                             
                        </div>
                        <div class="form-row" align="center">
                             
                            <!-- img2 (img2)-->
                            <div class="col-md-6 mb-3">
                                <label class="etiqueta" for="basicinput">Imagen 02 del producto</label>
                                <div class="controls">
                                <input type="file"   id="productimage2" class="span8 tip" name="img2" required>
                                </div>
                              <div class="invalid-feedback">
                                Ingresa una imagen
                              </div>
                            </div>
                            <!-- img -->
                            <!-- img2 (img3)-->
                            <div class="col-md-6 mb-3">
                                <label class="etiqueta" for="basicinput">Imagen 03 del producto</label>
                                <div class="controls">
                                <input type="file"   id="productimage3" class="span8 tip" name="img3" required>
                                </div>
                              <div class="invalid-feedback">
                                Ingresa una imagen
                              </div>
                            </div>
                            <!-- img -->
                        </div>

                        <hr>
                        <div class="control-group" align="center">
                            <div class="controls">
                                <button type="submit" name="newpro" class="botonp botonp1">Cargar Producto</button>
                                <a href="productos.php" class="botonp botonp5">Regresar</a>
                            </div>
                        </div>
                    </form> 
                </div>
            </div>   
             
            <br>
        </div>
    </div>
</div>

<!-- Editar -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Editar </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="control/categoria.php" method="POST">

                <div class="modal-body">
                    <input type="hidden" name="update_id" id="update_id">
                    <div class="form-group">
                         <label> Nombre de la categoria</label>
                        <input type="text" name="name" id="name" class="form-control"
                            placeholder="Categoria"> 
                    </div>

                    <div class="form-group">
                         <label> Descripción</label>
                         <textarea rows="5"  name="des" id="des" class="form-control" placeholder="escribe una descripción de la categoria"></textarea>
                    </div>  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="updatedata" class="btn btn-primary">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Eliminar -->
<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar categoria </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="control/categoria.php" method="POST">

                <div class="modal-body">

                    <input type="hidden" name="delete_id" id="delete_id">

                    <h4> ¿Quieres eliminar esta categoria? ??</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"> NO </button>
                    <button type="submit" name="deletedata" class="btn btn-primary"> Sí</button>
                </div>
            </form>

        </div>
    </div>
</div>