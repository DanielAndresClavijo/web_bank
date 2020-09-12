var key = clave();
//var validacion = new validacion();

$("#ingresar").click(function(event){
  var cedula = document.getElementById("cedula").value.trim();
  var password = document.getElementById("pass").value.trim();  
  if( cedula != '' && password != '' && 
      validar.numeroCedula(cedula) &&
      validar.contrasenna(password)) {
    //alert(validar.siNoEstaVacio(cedula));
    cedula = CryptoJS.AES.encrypt(cedula, key);   
    password = CryptoJS.AES.encrypt(password, key);
    alert(password);
    cadena="cedula=" + cedula + 
    "&password=" + password;
    $.ajax({
      type:"POST",
      url:"assets/controller/val_login.php",
      data:cadena,
      success:function(r){//Esta funcion recibe el valor retornado
        if(r==1){//Se valida si el valor retornado es igual a 1, pues esto es el resultado de la consulta sql, si se ejecuto sin ningun problema
            alertify.success('Logueado con exito :)');
            window.location='/assets/index.html';
        }else{
          alertify.error('Usuario no encontrado');
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
    cedula = CryptoJS.AES.encrypt(cedula, key);
    name1 = CryptoJS.AES.encrypt(name1, key);
    name2 = CryptoJS.AES.encrypt(name2, key);
    name3 = CryptoJS.AES.encrypt(name3, key);
    name4 = CryptoJS.AES.encrypt(name4, key);
    password = CryptoJS.AES.encrypt(password, key);
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
            alertify.success('Logueado con exito :)');
            window.location='login.php';
        }else{
          alertify.error('No se pudo registrar');
        }
      }
    });
  }else{
    alertify.notify('Faltan campos por llenar', 'alert', 5);
  }
});
