(function ($) {
    "use strict";
    var mainApp = {

        main_fun: function () {
            /*====================================
            METIS MENU 
            ======================================*/
            $('#main-menu').metisMenu();

            /*====================================
              LOAD APPROPRIATE MENU BAR
           ======================================*/
            $(window).bind("load resize", function () {
                if ($(this).width() < 768) {
                    $('div.sidebar-collapse').addClass('collapse')
                } else {
                    $('div.sidebar-collapse').removeClass('collapse')
                }
            });
        },

        initialization: function () {
            mainApp.main_fun();

        }

    }
    // Initializing ///

    $(document).ready(function () {
        mainApp.main_fun();
        $("#view").load("./pages/presentacion.html");
    });
    

}(jQuery));

document.getElementById("transferir").addEventListener("click", function(event){
    event.preventDefault();
    $("#view").load("pages/transferir.html");
});

document.getElementById("depositar").addEventListener("click", function(event){
    event.preventDefault();
    $("#view").load("pages/depositar.html");
});

document.getElementById("retirar").addEventListener("click", function(event){
    event.preventDefault();
    $("#view").load("pages/retirar.html");
});

document.getElementById("consultar").addEventListener("click", function(event){
    event.preventDefault();
    $("#view").load("pages/consultar.html");
});

document.getElementById("historial").addEventListener("click", function(event){
    event.preventDefault();
    $("#view").load("pages/historial.html");
});
