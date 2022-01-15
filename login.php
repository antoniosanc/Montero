<html lang="en">
<head>
	<title>Cafeteria</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&amp;display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="css/chek.css">
	 <link rel="stylesheet" type="text/css" href="css/form.css">
	<link rel="stylesheet" href="css/fontawesome6/css/all.css"> 
	<!-- JavaScript -->
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script src="librerias/alertifyjs/alertify.js"></script>
</head>

<style type="text/css">
/*------------------------------------------------------------------
    HEADER
-------------------------------------------------------------------*/
.top-navbar{
	position: relative;
	z-index: 10;
}

.top-navbar .navbar{
	padding: 15px 0px;
	position: fixed;
	width: 100%;
	transition: height .3s ease-out, background .3s ease-out, box-shadow .3s ease-out;
	-webkit-transform: translate3d(0, 0, 0);
	transform: translate3d(0, 0, 0);
	z-index: 100;
}

.top-navbar .navbar-light .navbar-nav .nav-link{
	color: #010101;
	font-size: 18px;
	padding: 0px 20px;
	border-radius: 4px;
}

.top-navbar .navbar-light .navbar-nav .nav-item .nav-link:hover{
	background: #d0a772;
	color: #ffffff;
}
.top-navbar .navbar-light .navbar-nav .nav-item.active .nav-link{
	background: #d0a772;
	color: #ffffff;
	border-radius: 4px;
}

.navbar-expand-lg .navbar-nav .dropdown-menu{
	border: none;
	 box-shadow: 2px 5px 6px rgba(0,0,0,0.5);
}

.navbar-expand-lg .navbar-nav .dropdown-menu a.dropdown-item:hover{
	background: #d0a772;
	color: #ffffff;
}
.navbar-light .navbar-toggler:hover{
	background: #cfa671;
}



</style>

<body class="img js-fullheight fondo"    ">

	<!-- Start header -->
    <header class="top-navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img  src="LOGOCH.png" alt="" width="60" height="60"  />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbars-rs-food">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item "><a class="nav-link" href="index.php">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="productos.php">Productos</a></li>
                        <li class="nav-item"><a class="nav-link" href="galeria.php">Galeria</a></li>
                        <li class="nav-item"><a class="nav-link" href="contacto.php">Contactanos</a></li>
                        <li class="nav-item"><a class="nav-link" href="login.php">Iniciar Sesión</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->
    <br><br>	
	<section class="ftco-section" style="padding-top: 50">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
						<!--  
						<center><img src="img/login.png" style="width: 30%;"></center>-->
						<h1 class="mb-4 text-center"> <font color="#fff "> Bienvenid@</font></h1>
						<form onsubmit="return login();" method="post" class="signin-form" >
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Correo electronico" name="correo" id="correo"   title="Ingresa tu correo">
							</div>
							<div class="form-group">
								<input id="password-field" type="password" class="form-control" placeholder="Contraseña" name="clave" title="Ingresa tu contraseña">
							<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
							</div>

							<div class="form-group" align="center">
								<div class="text-center d-inline-block">
							        
							        <div class="vc-toggle-container" >
							        	<font color="#fff " style="background: radial-gradient(#795548, #a1887f38); ">  Administrador</font>
							          <label class="vc-switch">
							            <input type="checkbox" class="vc-switch-input" name="tipo" id="tipo" data-on="Yes" />
							            <span class="vc-switch-label" data-on="Yes" data-off="No"></span>
							            <span class="vc-handle"></span>
							          </label>
							        </div>
							    </div>
							</div>

							<div class="form-group" align="center">
								<button type="submit" class="form-control btn btn-primary submit px-3">Ingresar</button>
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- formulario de registro -->
		<!-- partial:index.partial.html -->
		<center> <font color="#fff" size="4">¡Registrate!</font> </center>
		<div class='form-overlay'></div>
		<div class='icon fa fa-pencil' id='form-container'>
		  <span class='icon fa fa-close' id='form-close'></span>
		  <div id='form-content'>
		    <div id='form-head'>
		      <h1 class='pre'>Get inzsd touch</h1>
		      <p class='pre'>Good choice...</p>
		      <h1 class='post'>Thanks!</h1>
		      <p class='post'>I'll be in touch ASAP</p>
		    </div><br>
		    
<form class="needs-validation" novalidate>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Nombre</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustomUsername">Usuario</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
        </div>
        <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Please choose a username.
        </div>
      </div>
    </div>
  </div>

  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">City</label>
      <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">State</label>
      <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">Zip</label>
      <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
  </div>
   
  <input class='input submit' type='submit' value='Send Message'>
</form>
		  </div>
		</div>
		<!-- formulario de registro -->
	</section>



<script src="js/jquery.min.js"></script>
<!-- librerias para las alertas -->
 <script src="assets/librerias/alertifyjs/alertify.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="js/popper.js%2bbootstrap.min.js%2bmain.js.pagespeed.jc.9eD6_Mep8S.js"></script><script>eval(mod_pagespeed_T07FyiNNgg);</script>

<script>eval(mod_pagespeed_zB8NXha7lA);</script>
<script>eval(mod_pagespeed_xfgCyuItiV);</script>

<script type="text/javascript" src="js/fnciones.js"></script>
<script type="text/javascript" src="js/formulario.js"></script>
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
</body>
 
</html>
