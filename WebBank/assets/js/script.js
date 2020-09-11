var key = new clave();
var validacion = new validacion();

$("#ingresar").click(function(event){
  var cedula = document.getElementById("cedula").value.trim();
  var password = document.getElementById("pass").value.trim();  
  if(cedula != '' && password != '') {
    if(validacion.solonumeros(cedula)){
        cedula = CryptoJS.AES.encrypt(cedula, key);       
        password = CryptoJS.AES.encrypt(password, key);
        cadena="cedula=" + cedula + 
        "&password=" + password;
        $.ajax({
          type:"POST",
          url:"assets/controller/val_login.php",
          data:cadena,
          success:function(r){//Esta funcion recibe el valor retornado
            if(r==1){//Se valida si el valor retornado es igual a 1, pues esto es el resultado de la consulta sql, si se ejecuto sin ningun problema
                $('#tabladoc').load('docente/componentes/tabla.php');//Cargar la tabla donde estan los registros de de docente
                alertify.alert('Logueado con exito!', function(){ alertify.success('Ok'); });
            }else{
              alertify.alert('Error!', function(){ alertify.success('Ok'); });
            }
          }
        });
    }else{
        alert("no es numero");
    }    
  }else{
    console.log('No se enviaron datos');
  }
});

$("#registrar").click(function(event){
  var username = document.getElementById("user").value.trim();
  var name1 = document.getElementById("name1").value.trim();
  var name2 = document.getElementById("name2").value.trim();
  var name3 = document.getElementById("name3").value.trim();
  var name4 = document.getElementById("name4").value.trim();
  var cedula = document.getElementById("cedula").value.trim();
  var celular = document.getElementById("celular").value.trim();
  var password = document.getElementById("pass").value.trim();
  if(username != '' && name1 != '' && name2 != '' && name3 != '' && name4 != '' && cedula != '' && celular != '' && password != '') {
    username = CryptoJS.MD5(username);
    cedula = CryptoJS.MD5(cedula);
    celular = CryptoJS.MD5(celular);
    password = CryptoJS.MD5(password);
    cadena="username=" + username + 
    "&name1=" + name1 +
    "&name2=" + name2 + 
    "&name3=" + name3 + 
    "&name4=" + name4 + 
    "&cedula=" + cedula + 
    "&celular=" + celular + 
    "&password=" + password;
    $.ajax({
      type:"POST",
      url:"assets/controller/val_register.php",
      data:cadena,
      success:function(r){//Esta funcion recibe el valor retornado
        if(r==1){//Se valida si el valor retornado es igual a 1, pues esto es el resultado de la consulta sql, si se ejecuto sin ningun problema
            $('#tabladoc').load('docente/componentes/tabla.php');//Cargar la tabla donde estan los registros de de docente
            alertify.alert('Logueado con exito!', function(){ alertify.success('Ok'); });
        }else{
          alertify.alert('Error!', function(){ alertify.success('Ok'); });
        }
      }
    });
  }else{
    alertify.notify('Faltan campos por llenar', 'success', 5);
  }
});
