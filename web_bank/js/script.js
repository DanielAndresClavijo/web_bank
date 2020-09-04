//console.log('Click objeto 1');
document.getElementById("enviar").addEventListener("click", function(event){
  var username = document.getElementById("user").value.trim();
  var password = document.getElementById("pass").value.trim();
  if(username != '' && password != '') {
    username = CryptoJS.SHA3(username);
    password = CryptoJS.MD5(username);
    console.log(username);
    console.log(password);
  }else{
    console.log('No se enviaron datos');
  }
  
});
