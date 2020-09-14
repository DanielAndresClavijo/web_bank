<?php
    session_start();//Inicio de sesion
    //Validacion para comprobar si ya se ha iniciado sesion
    //Esto sirve para no permitir navegar entre paginas sin haberse logueado
    if(!isset($_SESSION['id'])){
        //no permite que se entre a las demas vistas por medio de la url
        header("location: ../index.php");
    }
?>          
<br>
<table class="table">
  <h3 class="text-center">Informaci&oacute;n de la Cuenta</h3>
  <thead>
    <tr>
      <th scope="col">N&uacute;mero de Cuenta</th>
      <th scope="col">Tipo de Cuenta</th>
      <th scope="col">Saldo Disponible</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1006291396</th>
      <td>Cuenta de ahorros</td>
      <td>$ 450.000</td>
    </tr>
  </tbody>
</table>
<hr />