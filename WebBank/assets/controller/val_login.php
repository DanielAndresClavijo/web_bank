<?php 
if(isset($_POST['username']) && isset($_POST['password'])){
  require_once '../model/MySQL.php'; //se llama la pagina donde se encuentra la conexion para la base de datos
  //declaracion de variables
  $ced=$_POST['username'];
  $pass=$_POST['password'];

  $mysql = new MySQL(); //se declara un nuevo array
  $mysql->conectar();
  $cedcontra = $mysql->efectuarConsulta("select usuario, contrasena from `usuario` where `numero_cedula` = '".$ced."' AND `contrasena` = '".$pass."'");   
  if (mysqli_num_rows($cedcontra) > 0){ 
    while ($resultado= mysqli_fetch_assoc($cedcontra)){
        $cedula= $resultado["cedula"];
        $contrasena= $resultado["contrasena"];
        $nombre= $resultado["contrasena"];
        $apellido= $resultado["contrasena"];
    }
    $mysql->desconectar();
    session_start();//Inicio de sesion
    $_SESSION['nombre']=$nombre.' '.$apellido;
    echo '1';
  }else{
    echo '0';
  }
}
  
?>