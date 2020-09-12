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
    
    <p class="recuperar"><a href="#">Olvide mi contrase&ntilde;a</a></p>
  </div>
  <script src="assets/js/jquery-3.5.1.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js" integrity="sha512-nOQuvD9nKirvxDdvQ9OMqe2dgapbPB7vYAMrzJihw5m+aNcf0dX53m6YxM4LgA9u8e9eg9QX+/+mPu8kCNpV2A==" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/aes.min.js" integrity="sha512-eqbQu9UN8zs1GXYopZmnTFFtJxpZ03FHaBMoU3dwoKirgGRss9diYqVpecUgtqW2YRFkIVgkycGQV852cD46+w==" crossorigin="anonymous"></script>
  <script src="assets/js/alertify.js"></script>
  <script src="assets/js/clave.js"></script>
  <script src="assets/js/validacion.js"></script>
  <script src="assets/js/script.js"></script>
  
</body>
</html>