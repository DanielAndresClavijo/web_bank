<?php 

if(isset($_POST['cedula']) && isset($_POST['monto'])){
    require_once '../model/MySQL.php'; 
    //Encriptada
    $cedula=$_POST['cedula'];
    $name1=$_POST['monto'];
    $mysql = new MySQL(); //se declara un nuevo array
    $mysql->conectar();
    $usuario = $mysql->efectuarConsulta("SELECT id_usuario FROM usuario WHERE numero_cedula = '".$cedula."'");
    if (mysqli_num_rows($usuario) > 0){ 
        while ($resultado= mysqli_fetch_assoc($usuario)){
            $id_usuario= $resultado["id_usuario"];
        }
        session_start();//Inicio de sesion
        $saldo = $mysql->efectuarConsulta("SELECT id_saldo, id_usuario, cantidad FROM saldo WHERE id_usuario = '".$id_usuario."'");
        if (mysqli_num_rows($saldo) > 0){ 
            while ($resultado= mysqli_fetch_assoc($saldo)){
                $id_saldo= $resultado["id_saldo"];
                $id_usuario= $resultado["id_usuario"];
                $cantidad=$cantidad["cantidad"];
            }
        }else{
            echo '1';//Usuario no encontrado
        }
    }
        
    $cedcontra = $mysql->efectuarConsulta("insert into usuario (numero_cedula, contrasena, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido) values('".$cedula."', '".$password."','".$name1."','".$name2."','".$name3."','".$name4."')");   
    if($cedcontra){
        echo "1";
    }else{
        echo "0";
    }
    $mysql->desconectar();   
    
}   
?>