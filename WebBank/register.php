<?php
    session_start();//Inicio de sesion
    if(isset($_SESSION['id'])){
        header("location: assets/index.php");
    }    
    ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
	<!-- BOOTSTRAP STYLES-->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
	<!-- ALERTIFY STYLES-->
  <link rel="stylesheet" href="assets/css/alertify/alertify.css">
  <link rel="stylesheet" href="assets/css/alertify/bootstrap.css">
	<!-- MY STYLES-->
  <link rel="stylesheet" href="assets/css/register.css">
</head>
<body>
  <div class="form">
    <h2>Registro</h2>
    <div class="input">
      <div class="inputBox">
        <label for="cedula">Numero de cedula <span>*</span></label>
        <input type="number" id="cedula" placeholder="0123456789">
      </div>
      <div class="inputBox name">
        <label for="name1">Primer nombre <span>*</span></label>
        <input type="text" id="name1">
      </div>
      <div class="inputBox name">
        <label for="name2">Segundo nombre</label>
        <input type="text" id="name2">
      </div>
      <div class="inputBox name">
        <label for="name3">Primer apellido <span>*</span></label>
        <input type="text" id="name3">
      </div>
      <div class="inputBox name">
        <label for="name4">Segundo apellido</label>
        <input type="text" id="name4">
      </div>
      
      <div class="inputBox">
        <label for="User">Contrase&ntilde;a <span>*</span></label>
        <input type="password" id="pass" placeholder="*******">
      </div>
      <div class="inputBox">
        <label for="User">Repetir contrase&ntilde;a <span>*</span></label>
        <input type="password" id="repetir" placeholder="*******">
      </div>
      <div class="inputBox">
        <input type="button" id="registrar" value="Registrar">
      </div>
    </div>
    
    <p class="recuperar">* = campos requeridos</p>
  </div>
  <script src="assets/js/jquery-3.5.1.js"></script>    
  <script src="assets/js/alertify.js"></script>
  <script src="assets/js/validacion.js"></script>
  <script src="assets/js/script.js"></script>  
</body>
</html>