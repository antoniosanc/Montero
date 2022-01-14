<?php require_once "../conexion.php"; ?>
<!-- Modal agregar-->
<div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="control/productos.php" method="POST" enctype="multipart/form-data">

                <div class="modal-body">
                    <div class="form-group">
                        <label> Nombre del producto</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre del producto" required>
                    </div>
                    <div class="form-group">
                        <label> Categoria</label>
                        <select class="form-control"name="categoria">
                           <option  selected="true" disabled="disabled">Selecciona una categoria</option>
                        <?php 
                            $sql1 ="SELECT * FROM categoria ";
                            $consulta1 = mysqli_query($conexion, $sql1);
                            while($row = mysqli_fetch_array($consulta1)){
                        ?> 
                          <option><?php echo $row['nombre']; ?></option>
                        <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label> Descripción</label>
                        <textarea rows="5"  name="descripcion" class="form-control" placeholder="Escribe una descripción del producto"></textarea>
                    </div>
                    <div class="form-group">
                        <label> Precio</label>
                        <input type="number" name="precio" class="form-control" placeholder="Precio" required>
                    </div>
                    <div class="form-group">
                        <label> Presentacion Kg</label>
                        <input type="number" name="presentacion" class="form-control" placeholder="Presentacion" required>
                    </div>
                    <div class="form-group">
                        <label> Stock</label>
                        <input type="number" name="stock" class="form-control" placeholder="Stock" required>
                    </div>
                    <div class="form-group">
                        <label> Descuento</label>
                        <input type="number" name="descuento" class="form-control" placeholder="Descuento" required>
                    </div>
                    <div class="form-group">
                        <label> Imagen</label>
                        <input type="file" id="archivo" name="archivo" class="form-control"  required/>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" name="insertdata" class="btn btn-primary">Registrar</button>
                </div>
            </form>

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