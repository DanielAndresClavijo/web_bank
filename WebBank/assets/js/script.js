$("#ingresar").click(function(event){
  var cedula = document.getElementById("cedula").value.trim();
  var password = document.getElementById("pass").value.trim();  
  if( cedula != '' && password != '' && 
      validar.numeroCedula(cedula) &&
      validar.contrasenna(password)) {
    cedula = btoa(cedula);
    password = btoa(password);
    cadena="cedula=" + cedula + 
    "&password=" + password;
    $.ajax({
        type:"POST",
        url:"assets/controller/val_login.php",
        data:cadena,
        success:function(r){//Esta funcion recibe el valor retornado
            if(r==1){//Se valida si el valor retornado es igual a 1, pues esto es el resultado de la consulta sql, si se ejecuto sin ningun problema
                alertify.success('Logueado con exito :)');
                setTimeout(function(){ window.location = './assets/index.php';}, 1000);
            }else if(r==0){
              alertify.error('Usuario no encontrado');
            }else if(r=="consultaVacia"){
              alertify.error('Consulta vacia');
            }
        }
    });  
  }else{
    alertify.error('Datos incorrectos');
  }
});

$("#registrar").click(function(event){
  var cedula = document.getElementById("cedula").value.trim();
  var name1 = document.getElementById("name1").value.trim();
  var name2 = document.getElementById("name2").value.trim();
  var name3 = document.getElementById("name3").value.trim();
  var name4 = document.getElementById("name4").value.trim();  
  var password = document.getElementById("pass").value.trim();
  var password2 = document.getElementById("repetir").value.trim();
  if(name1 != '' &&  name3 != '' && cedula != '' && password != '' && password2 != ''
        && validar.numeroCedula(cedula) && validar.siEsLaMismaContrasenna(password, password2) 
        && cedula){
    cedula = btoa(cedula);
    name1 = btoa(name1);
    name2 = btoa(name2);
    name3 = btoa(name3);
    name4 = btoa(name4);
    password = btoa(password);
    cadena="cedula=" + cedula + 
    "&name1=" + name1 +
    "&name2=" + name2 + 
    "&name3=" + name3 + 
    "&name4=" + name4 + 
    "&password=" + password;
    $.ajax({
      type:"POST",
      url:"assets/controller/val_register.php",
      data:cadena,
      success:function(r){//Esta funcion recibe el valor retornado
        if(r==1){//Se valida si el valor retornado es igual a 1, pues esto es el resultado de la consulta sql, si se ejecuto sin ningun problema
            alertify.success('Registrado con exito');    
            setTimeout(function(){ window.location = 'index.php';}, 1000);
        }else{
          alertify.error('No se pudo registrar');
        }
      }
    });
  }else{
    alertify.notify('Faltan campos por llenar', 'alert', 5);
  }
});

$('#cerrar_session').click(function() {
    cadena="cerrar_session=" + 1;
    $.ajax({
        type:"POST",
        url:"../index.php",
        data:cadena,
        success:function(r){
            alertify.success("Sesion cerrada!");
            setTimeout('location.reload()',1000);
        }
    });

});

