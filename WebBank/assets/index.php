<?php
    session_start();//Inicio de sesion
    //Validacion para comprobar si ya se ha iniciado sesion
    //Esto sirve para no permitir navegar entre paginas sin haberse logueado
    if(!isset($_SESSION['id'])){
        //no permite que se entre a las demas vistas por medio de la url
        header("location: ../index.php");
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WEB BANK</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap/bootstrap.css" rel="stylesheet" />
    <!-- ALERTIFU STYLES-->
    <link rel="stylesheet" href="css/alertify/alertify.css">
    <link rel="stylesheet" href="css/alertify/bootstrap.css">
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="css/styles/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- TABLE STYLES-->
    <link href="js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <!-- WRAPPER  -->
    <div id="wrapper">
        <!-- FIXME: NAV TOP - MENU SUPERIOR -->
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <!-- FIXME: LINEAS DIAGONALES - Estas se muestran cuando la escala de la pantalla supera su tamaño minimo, sirven para expandir y contraer el menu -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Web Bank</a> 
            </div>
            <!-- FIXME: /. LINEAS DIAGONALES - Estas se muestran cuando la escala de la pantalla supera su tamaño minimo, sirven para expandir y contraer el menu -->
            <!-- FIXME: Cerrar sesion -->
            <div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;">
                <a id="cerrar_session" class="btn btn-danger square-btn-adjust">Cerrar Sesi&oacute;n</a> 
            </div>
            <!-- FIXME: /. Cerrar sesion -->
        </nav>   
        <!-- FIXME: /. NAV TOP - MENU SUPERIOR -->

        <!-- TODO: NAV SIDE - MENU LATERAL IZQUIERDO -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <!-- Logo usuario  -->
                    <li class="text-center">
                        <img src="img/find_user.png" class="user-image img-responsive"/>
                    </li>
                    <!-- /. Logo usuario  -->      
                    <!--los botones funcionan gracias al index.js - este se encarga que dependiendo del id que
                    tenga el boton haga su respectiva funcion, en este caso es la redireccion a la pagina correspondiente-->             
                    <li>
                        <a href="#" id="transferir"><i class="fa fa fa-arrow-circle-up fa-3x"></i>Transferir</a>
                    </li>
                        <li>
                        <a href="#" id="depositar"><i class="fa fa fa fa-cloud-download fa-3x"></i>Depositar</a>
                    </li>
                    <li>
                        <a href="#" id="retirar"><i class="fa fa fa-cloud-upload fa-3x"></i>Retirar</a>
                    </li>
                    <li >
                        <a href="#" id="consultar"><i class="fa fa-edit fa-3x"></i> Consultar</a>
                    </li>
                    <li  >
                        <a href="#" id="historial"><i class="fa fa-table fa-3x"></i>Historial</a>
                    </li>                                 
                     
                </ul>
            </div> 
        </nav>  
        <!-- TODO: /. NAV SIDE - MENU LATERAL IZQUIERDO  -->

        <!-- PAGE WRAPPER  -->
        <div id="page-wrapper" >
            <!-- PAGE INNER  -->
            <div id="page-inner">
                <!-- ROW -->
                <div class="row">
                    <div class="col-md-12">
                     <!--<h2>WEB BANK</h2>-->   
                        <h4>Bienvenido Jhon Deo , disfruta de tu estadia. </h4>
                    </div>
                </div>              
                <hr />
                <!-- /. ROW -->
                <div id="view">
                    <!-- View: Aqui se va a cargar las paginas  -->
                </div> 
                <!-- /. ROW -->         
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <footer class="pt-4 my-md-5 pt-md-5 border-top color">
        <center>
            <div class="row">
            <div class="col-12 col-md">
                <!-- <img class="mb-2" src="brand/bootstrap-solid.svg" alt="" width="24" height="24">  -->
                <small class="d-block mb-3 text-muted">&copy; Web Bank. Derechos reservados - 2020</small>
            </div>
          </div>
        </center>
    </footer>

    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="js/jquery/jquery-3.5.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- ALERTIFY STYLES--> 
    <script src="js/alertify/alertify.js"></script>
    <!-- DATA TABLE SCRIPTS -->
    <script src="js/dataTables/jquery.dataTables.js"></script>
    <script src="js/dataTables/dataTables.bootstrap.js"></script>
    <!-- JQUERY METIS MENU SCRIPTS -->
    <script src="js/jquery/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->  
    <script src="js/scripts/validacion.js"></script>  
    <script src="js/scripts/funciones.js"></script>
    <script src="js/scripts/index.js"></script> 
</body>
</html>