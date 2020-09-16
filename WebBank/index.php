<?php
session_start();
if(isset($_POST['cerrar_session']) && $_POST['cerrar_session'] == '1'){//Se valida si existe la varible de cerrar sesion, esta se envia cuando se cierra sesion en algun perfil abierto
    session_unset();    
    session_destroy(); // Destroy the sessiones
}
if(isset($_SESSION['id'])){
         header("location: assets/index.php");
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio de sesion - WEBBANK</title>
	<!-- ALERTIFY STYLES-->
  <link rel="stylesheet" href="assets/css/alertify/alertify.css">
  <link rel="stylesheet" href="assets/css/alertify/bootstrap.css">
	<!-- MY STYLES-->
  <link rel="stylesheet" href="assets/css/styles/login.css">
</head>
<body>
  <!-- FORM-->
  <div class="form">
    <h2>INCIO DE SESION <br> WEB BANK</h2>
    <div class="input">
      <div class="inputBox">
        <label for="User">Cedula</label>
        <input  type="text" id="cedula" placeholder="Cedula">
      </div>
      <div class="inputBox">
        <label for="User">Contrase&ntilde;a</label>
        <input type="password" id="pass" placeholder="*******">
      </div>
      <div class="inputBox">
        <input type="button" id="ingresar" value="Ingresar">
      </div>      
    </div>
    <p class="recuperar"><a href="register.php">Registrarme</a></p>
  </div>
  <!-- /. FORM-->
  
  <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
  <!-- JQUERY SCRIPTS -->
  <script src="assets/js/jquery/jquery-3.5.1.js"></script>  
  <!-- ALERTIFY SCRIPTS -->
  <script src="assets/js/alertify/alertify.js"></script>
  <!-- CUSTOM SCRIPTS -->
  <script src="assets/js/scripts/validacion.js"></script>
  <script src="assets/js/scripts/funciones.js"></script>
  
</body>
</html>