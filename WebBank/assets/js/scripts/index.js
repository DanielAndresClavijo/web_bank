//Esta es un funcion que encapsula procedimientos jQuery
(function ($) {
    "use strict";
    var mainApp = {

        main_fun: function () {
            /*====================================
            METIS MENU - Menu desplegable
            ======================================*/
            $('#main-menu').metisMenu();

            /*====================================
              LOAD APPROPRIATE MENU BAR - Diseño responsive del menu lateral izquierdo
              Lo que hace es ocultar o mostrar el menu
           ======================================*/
            $(window).bind("load resize", function () {
                //Cuando la pantalla reduce su tamaño menos de 768pixeles
                //Se agrega una clase para ocultar el menu, de lo contrario remueve 
                //la clase para poder mostrarlo
                if ($(this).width() < 768) {
                    $('div.sidebar-collapse').addClass('collapse')
                } else {
                    $('div.sidebar-collapse').removeClass('collapse')
                }
            });
        },

        //Esta funcion corresponde al Metis menu 
        //Oculta o muestra el menu lateral izquierdo, segun el tamaño 
        //que se encuentre la ventana
        initialization: function () {
            mainApp.main_fun();

        }

    }
    // Initializing ///
    //Cuando el documento se encuentra cargado, se inicializa 
    //La funcion que hace que el menu se muestre
    //Ademas carga en la etiqueta con id view, la presentacion 
    $(document).ready(function () {
        mainApp.main_fun();
        $("#view").load("./pages/presentacion.php");
    });
    

}(jQuery));

//Esta funcion es la encargada de cerrar sesion
//Esto ocurre con evento click
//Cuando se oprima la etiqueta con id cerrar_sesion
//Se ejecuta el procedimiento de cerrar la sesion
$('#cerrar_session').click(function() {
    //Alertifi confirm, muestra una alerta que srve para confirmar
    //el cierre de sesion, lo que hace esta alerta es ejecutar una funcion
    //segun lo que el usuario escoja
    alertify.confirm('Cerrar Sesion', '¿Esta seguro que desea cerrar sesion?',
    //Esta funcion es ejecutada cuando el usuario confirma el cierre de sesion 
    function(){ 
        //Lo que hace esta funcion es mandar por el metodo POST al 
        //login (que esta hubicado en ../index.php ), envia una variable 
        //de cierre de sesion, y en el index se valida si la varible se ha enviado
        //para proceder con el cierre y destruccion de la sesio
        cadena="cerrar_session=" + 1;//Variable de cierre de sesion
        $.ajax({
            type:"POST",//Metodo de envio
            url:"../index.php",//Ruta destino a la cual se le va a enciar la variable
            data:cadena,//La informacion que se va a enviar a la ruta destino
            success:function(){//Funcion que se ejecuta si se completa la peticion 
                alertify.success("Sesion cerrada!");//Se le alerta al usuario que la sesion ha sido cerrada
                setTimeout('location.reload()',1000);//Se espera 1 segundo para mostrar la alerta para despues recargar la pagina
            }
        });
    }
    //Esta funcion es ejecutada cuando el usuario cancela el cierre de sesion
    ,function(){ alertify.error('Cancelado')});
    
});

//Variables para manejar el menu lateral izquierdo
//Array que contiene los id de los procedimientos que ejecuta el menu lateral
var ids = ['transferir','depositar','retirar','consultar','historial'];
//Se captura en variables los id del array
var transferir = document.getElementById(""+ids[0]+"");
var depositar = document.getElementById(""+ids[1]+"");
var retirar = document.getElementById(""+ids[2]+"");
var consultar = document.getElementById(""+ids[3]+"");
var historial = document.getElementById(""+ids[4]+"");

//Funcion que se ejecutal al dar click en la opcion del menu transferir
transferir.addEventListener("click", function(event){
    event.preventDefault();//Previene que la etiqueta "a" ejecute el href
    $("#view").load("pages/transferir.php");//Cargar en la etiqueta con id view la vista solicitada
    //EL siguiete for va a recorrer el arreglo que contiene el nombre de los
    //id de las opciones del meu lateral, este for lo que hara sera cambiar
    //las clases de cada elemento seleccionado, esto sirve para que cuando el usuario
    //precione alguna opcion, esta se quede seleccionada con el color rojo
    for (var i = 0; i < ids.length; i++) {
        if (ids[i] == ids[0]) {//Si verdadero, se agrega la clase active-menu
            $("#"+ids[i]+"").addClass("active-menu");
        }else{//De lo contrrio, le quita la clase active-menu
            $("#"+ids[i]+"").removeClass("active-menu")
        }
    }
    //La case active-menu sirve para dar color rojo a la opcion seleccionada del menu
});

//Funcion que se ejecutal al dar click en la opcion del menu depositar
depositar.addEventListener("click", function(event){
    event.preventDefault();//Previene que la etiqueta "a" ejecute el href
    $("#view").load("pages/depositar.php");//Cargar en la etiqueta con id view la vista solicitada
    //EL siguiete for va a recorrer el arreglo que contiene el nombre de los
    //id de las opciones del meu lateral, este for lo que hara sera cambiar
    //las clases de cada elemento seleccionado, esto sirve para que cuando el usuario
    //precione alguna opcion, esta se quede seleccionada con el color rojo
    for (var i = 0; i < ids.length; i++) {
        if (ids[i] == ids[1]) {//Si verdadero, se agrega la clase active-menu
            $("#"+ids[i]+"").addClass("active-menu");
        }else{//De lo contrrio, le quita la clase active-menu
            $("#"+ids[i]+"").removeClass("active-menu")
        }
    }
    //La case active-menu sirve para dar color rojo a la opcion seleccionada del menu
});

//Funcion que se ejecutal al dar click en la opcion del menu retirar
retirar.addEventListener("click", function(event){
    event.preventDefault();//Previene que la etiqueta "a" ejecute el href
    $("#view").load("pages/retirar.php");//Cargar en la etiqueta con id view la vista solicitada
    //EL siguiete for va a recorrer el arreglo que contiene el nombre de los
    //id de las opciones del meu lateral, este for lo que hara sera cambiar
    //las clases de cada elemento seleccionado, esto sirve para que cuando el usuario
    //precione alguna opcion, esta se quede seleccionada con el color rojo
    for (var i = 0; i < ids.length; i++) {
        if (ids[i] == ids[2]) {//Si verdadero, se agrega la clase active-menu
            $("#"+ids[i]+"").addClass("active-menu");
        }else{//De lo contrrio, le quita la clase active-menu
            $("#"+ids[i]+"").removeClass("active-menu")
        }
    }
    //La case active-menu sirve para dar color rojo a la opcion seleccionada del menu
});

//Funcion que se ejecutal al dar click en la opcion del menu cosultar
consultar.addEventListener("click", function(event){
    event.preventDefault();//Previene que la etiqueta "a" ejecute el href
    $("#view").load("pages/consultar.php");//Cargar en la etiqueta con id view la vista solicitada
    //EL siguiete for va a recorrer el arreglo que contiene el nombre de los
    //id de las opciones del meu lateral, este for lo que hara sera cambiar
    //las clases de cada elemento seleccionado, esto sirve para que cuando el usuario
    //precione alguna opcion, esta se quede seleccionada con el color rojo
    for (var i = 0; i < ids.length; i++) {
        if (ids[i] == ids[3]) {//Si verdadero, se agrega la clase active-menu
            $("#"+ids[i]+"").addClass("active-menu");
        }else{//De lo contrrio, le quita la clase active-menu
            $("#"+ids[i]+"").removeClass("active-menu")
        }
    }
    //La case active-menu sirve para dar color rojo a la opcion seleccionada del menu
});

//Funcion que se ejecutal al dar click en la opcion del menu historial
historial.addEventListener("click", function(event){
    event.preventDefault();//Previene que la etiqueta "a" ejecute el href
    $("#view").load("pages/historial.php");//Cargar en la etiqueta con id view la vista solicitada
    //EL siguiete for va a recorrer el arreglo que contiene el nombre de los
    //id de las opciones del meu lateral, este for lo que hara sera cambiar
    //las clases de cada elemento seleccionado, esto sirve para que cuando el usuario
    //precione alguna opcion, esta se quede seleccionada con el color rojo
    for (var i = 0; i < ids.length; i++) {
        if (ids[i] == ids[4]) {//Si verdadero, se agrega la clase active-menu
            $("#"+ids[i]+"").addClass("active-menu");
        }else{//De lo contrrio, le quita la clase active-menu
            $("#"+ids[i]+"").removeClass("active-menu")
        }
    }
    //La case active-menu sirve para dar color rojo a la opcion seleccionada del menu
});

//Resulta que la siguiente funcion se debio colocar con un tiempo de
//ejecucion de 1 segundo, ya que con los elementos que se iba a interactuar
//se cargaban mucho despues de declarar las variables, entonces las funciones 
//estaban dando error porque decia que aun no se habia encontrado el elemento seleccionado
//con este delay de 1 segundo, se garantiza la interaccion de los elementos cargados por .load

setTimeout(function(){ 
    //Variables para almacenar los ids de los botones de la pagina
    //de presentacion
    var btntransferir = document.getElementById("btntransferir");
    var btndepositar = document.getElementById("btndepositar");
    var btnretirar = document.getElementById("btnretirar");
    //Funcion que se ejecutal al dar click en el boton transferir de la presentacion
    btntransferir.addEventListener("click", function(event){
        event.preventDefault();//Previene que la etiqueta "a" ejecute el href
        $("#view").load("pages/transferir.php");//Cargar en la etiqueta con id view la vista solicitada
        //EL siguiete for va a recorrer el arreglo que contiene el nombre de los
        //id de las opciones del meu lateral, este for lo que hara sera cambiar
        //las clases de cada elemento seleccionado, esto sirve para que cuando el usuario
        //precione alguna opcion, esta se quede seleccionada con el color rojo
        for (var i = 0; i < ids.length; i++) {
            if (ids[i] == ids[0]) {//Si verdadero, se agrega la clase active-menu
                $("#"+ids[i]+"").addClass("active-menu");
            }else{//De lo contrrio, le quita la clase active-menu
                $("#"+ids[i]+"").removeClass("active-menu")
            }
        }
        //La case active-menu sirve para dar color rojo a la opcion seleccionada del menu
    });

    //Funcion que se ejecutal al dar click en el boton depositar de la presentacion
    btndepositar.addEventListener("click", function(event){
        event.preventDefault();//Previene que la etiqueta "a" ejecute el href
        $("#view").load("pages/historial.php");//Cargar en la etiqueta con id view la vista solicitada
        //EL siguiete for va a recorrer el arreglo que contiene el nombre de los
        //id de las opciones del meu lateral, este for lo que hara sera cambiar
        //las clases de cada elemento seleccionado, esto sirve para que cuando el usuario
        //precione alguna opcion, esta se quede seleccionada con el color rojo
        for (var i = 0; i < ids.length; i++) {
            if (ids[i] == ids[1]) {//Si verdadero, se agrega la clase active-menu
                $("#"+ids[i]+"").addClass("active-menu");
            }else{//De lo contrrio, le quita la clase active-menu
                $("#"+ids[i]+"").removeClass("active-menu")
            }
        }
        //La case active-menu sirve para dar color rojo a la opcion seleccionada del menu
    });

    //Funcion que se ejecutal al dar click en el boton retirar de la presentacion
    btnretirar.addEventListener("click", function(event){
        event.preventDefault();//Previene que la etiqueta "a" ejecute el href
        $("#view").load("pages/historial.php");//Cargar en la etiqueta con id view la vista solicitada
        //EL siguiete for va a recorrer el arreglo que contiene el nombre de los
        //id de las opciones del meu lateral, este for lo que hara sera cambiar
        //las clases de cada elemento seleccionado, esto sirve para que cuando el usuario
        //precione alguna opcion, esta se quede seleccionada con el color rojo
        for (var i = 0; i < ids.length; i++) {
            if (ids[i] == ids[2]) {//Si verdadero, se agrega la clase active-menu
                $("#"+ids[i]+"").addClass("active-menu");
            }else{//De lo contrrio, le quita la clase active-menu
                $("#"+ids[i]+"").removeClass("active-menu")
            }
        }
        //La case active-menu sirve para dar color rojo a la opcion seleccionada del menu
    });
}, 1000);