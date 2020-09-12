var validar = {
  numeroCedula:function(str) {
    var pattern = /^[0-9]{8,10}$/;
    return pattern.test(str);  // returns a boolean
  },
  contrasenna:function(str){
    var pattern = /^[a-zA-Z0-9]{8,20}$/;
    return pattern.test(str);  // returns a boolean
  },
  siEsLaMismaContrasenna:function(str1,str2){
      return str1 === str2;
  }
};   