<?php
session_start();
if(isset($_POST['cerrar_session']) && $_POST['cerrar_session'] == '1'){//Se valida si existe la varible de cerrar sesion, esta se envia cuando se cierra sesion en algun perfil abierto
    $_SESSION = array(); // Destroy the variables
    session_unset();
    session_write_close();
    session_destroy(); // Destroy the session
}else if(isset($_SESSION['id'])){
         header("location: assets/index.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="assets/css/alertify/alertify.css">
  <link rel="stylesheet" href="assets/css/alertify/bootstrap.css">
  <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
  <div class="form">
    <h2>Login</h2>
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
  <script src="assets/js/jquery-3.5.1.js"></script>  
    <script src="assets/js/alertify.js"></script>
  <script src="assets/js/validacion.js"></script>
  <script src="assets/js/script.js"></script>
  
</body>
</html>