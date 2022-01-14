  function load(page){
    var parametros = {"action":"ajax","page":page};
    $("#loader").fadeIn('slow');
    $.ajax({
      url:'paises_ajax.php',
      data: parametros,
       beforeSend: function(objeto){
      $("#loader").html("<img src='loader.gif'>");
      },
      success:function(data){
        $(".outer_div").html(data).fadeIn('slow');
        $("#loader").html("");
      }
    })
  }

    $('#dataUpdate').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Botón que activó el modal
      var id = button.data('id') // Extraer la información de atributos de datos
      var nombre = button.data('nombre') // Extraer la información de atributos de datos
      var precio = button.data('precio') // Extraer la información de atributos de datos
      var cantidad = button.data('cantidad') // Extraer la información de atributos de datos
      var des = button.data('des') // Extraer la información de atributos de datos
      var estado = button.data('estado') // Extraer la información de atributos de datos
      var accion = button.data('accion') // Extraer la información de atributos de datos
      
      var modal = $(this)
      modal.find('.modal-title').text('Modificar país: '+nombre)
      modal.find('.modal-body #id').val(id)
      modal.find('.modal-body #nombre').val(nombre)
      modal.find('.modal-body #precio').val(precio)
      modal.find('.modal-body #cantidad').val(cantidad)
      modal.find('.modal-body #des').val(des)
      modal.find('.modal-body #estado').val(estado)
      modal.find('.modal-body #accion').val(accion)
      $('.alert').hide();//Oculto alert
    })
    
    $('#dataDelete').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Botón que activó el modal
      var id = button.data('id') // Extraer la información de atributos de datos
      var modal = $(this)
      modal.find('#id_pais').val(id)
    })

  $( "#actualidarDatos" ).submit(function( event ) {
    var parametros = $(this).serialize();
       $.ajax({
          type: "POST",
          url: "modificar.php",
          data: parametros,
           beforeSend: function(objeto){
            $("#datos_ajax").html("Mensaje: Cargando...");
            },
          success: function(datos){
          $("#datos_ajax").html(datos);
          
          load(1);
          }
      });
      event.preventDefault();
    });
    
    $( "#guardarDatos" ).submit(function( event ) {
    var parametros = $(this).serialize();
       $.ajax({
          type: "POST",
          url: "control/producto.php",
          data: parametros,
           beforeSend: function(objeto){
            $("#datos_ajax_register").html("Mensaje: Cargando...");
            },
          success: function(datos){
          $("#datos_ajax_register").html(datos);
          
          load(1);
          }
      });
      event.preventDefault();
    });
    
    $( "#eliminarDatos" ).submit(function( event ) {
    var parametros = $(this).serialize();
       $.ajax({
          type: "POST",
          url: "eliminar.php",
          data: parametros,
           beforeSend: function(objeto){
            $(".datos_ajax_delete").html("Mensaje: Cargando...");
            },
          success: function(datos){
          $(".datos_ajax_delete").html(datos);
          
          $('#dataDelete').modal('hide');
          load(1);
          }
      });
      event.preventDefault();
    });