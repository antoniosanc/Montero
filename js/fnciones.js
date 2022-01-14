

function login() {
	var correo = document.getElementById('correo').value;
	var clave = document.getElementById('password-field').value;
	if (document.getElementById('tipo').checked){
		var tipo = "si";
	}else{
		var tipo = "no";
	}

	if (correo && clave) {
	    emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
	        //Se muestra un texto a modo de ejemplo, luego va a ser un icono
	    if (emailRegex.test(correo)) {
	         var dataen = 'tipo='+tipo+'&correo='+correo+'&clave='+clave;
	         $.ajax({
                type:'POST',
                url:'control/login.php',
                data:dataen,
                success:function(r){
                    if (r==1) {
                         alertify.alert().set({'startMaximized':false, 'title':'Datos correctos', 'message':'<center><b><font size="5" color="#2874A6"> Bienvenido administrador continua <br> para ver el panel general</font></b><br></center>',
          'onok': function(){ window.location.href = "admin/"; }}).show();
                    }
                    if (r==2){
                         alertify.alert('!Espera¡', '<center><b><font size="5" color="red">  Tu usuario o contraseña son incorrectos</font></b><br><strong>O realiza tu registro </strong><br> <a href="#"><button type="button" class="btn btn-info">Registrate</button></a></center>', function(){ alertify.error('datos incorrectos'); });
                    }
                    if (r==4){
                         alertify.alert().set({'startMaximized':false, 'title':'Datos correctos', 'message':'<center><b><font size="5" color="#2874A6"> Bienvenido continua <br> para entrar a la tienda</font></b><br></center>',
                        'onok': function(){ window.location.href = "tienda/"; }}).show();
                    }
                }
            });

	        
	    } else {
	      alert('Correo no valido');
	    }
	    
	}else{
	    alert('Ingrese todos los campos'); 
	}

	return false;
 
}