 

function NewColaborador() {
        var nom = document.getElementById('nom').value;
        var nomus = document.getElementById('nomus').value;
        var correo = document.getElementById('correo').value;
        var contraseña = document.getElementById('contra').value;

    if (nom && correo && contraseña) {

        emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
        //Se muestra un texto a modo de ejemplo, luego va a ser un icono
        if (emailRegex.test(correo)) {
             var dataen = 'opcion='+1+'&non='+nom+'&correo='+correo+'&contra='+contraseña+'&nomus='+nomus;
            $.ajax({
                type:'POST',
                url:'control/colaborador.php',
                data:dataen,
                success:function(r){
                    if (r=1) {
                        alertify.success("Colaborador agregado");
                        $("#tabla").load(location.href + " #tabla");
                    }else{
                        alertify.error("fallo el servidor");
                    }
                }
            });
        } else {
          alertify.error('Correo no valido');
        }
        
    }else{
        alertify.error('Ingrese todos los campos'); 
    }
        
    return false;
}

function deletecolaborador() {
    var idcol = document.getElementById('idcol').value;

    alert(idcol);
    return false; 
}

function newpregunta() {
    var codigo = document.getElementById('codigo').value;
    var tipo = document.getElementById('tipo').value;
    var pregunta = document.getElementById('pregunta').value;
    var categoria = document.getElementById('cate').value;
        
    if (codigo && tipo && pregunta && categoria) {
        var dataen = 'opcion='+1+'&cod='+codigo+'&tipo='+tipo+'&pre='+pregunta+'&cate='+categoria;
        $.ajax({
            type:'POST',
            url:'control/pregunta.php',
            data:dataen,
            success:function(r){
                if (r==1) {
                    alertify.success("Pregunta registrada");
                    $("#tabla").load(location.href + " #tabla");
                }else if(r==3){
                    alertify.warning("Codigo repetido");
                    document.getElementById("codigo").value = "";
                }else{
                    alertify.error("Fallo el servidor");
                }
            }
        });
    }else{
        alertify.error('Ingrese todos los campos'); 
    }
        
    return false;
}