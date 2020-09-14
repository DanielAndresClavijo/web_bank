<?php
    session_start();//Inicio de sesion
    if(!isset($_SESSION['id'])){
        header("location: ../index.php"); //no permite que se entre a las demas vistas por medio de la url
    }
    ?>
    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Web Bank</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    
    <link rel="stylesheet" href="css/alertify/alertify.css">
    <link rel="stylesheet" href="css/alertify/bootstrap.css">
     <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="css/custom.css" rel="stylesheet" />
    
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
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Web Bank</a> 
            </div>
            <div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;"> 
                
                <a id="cerrar_session" class="btn btn-danger square-btn-adjust">Cerrar Sesi&oacute;n</a> 
            </div>
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
                    <!--los botones funcionan gracias al custom.js - este se encarga que dependiendo de la clase que
                    tenga el boton haga su respectiva funcion, en este caso es la redireccion a la pagina correspondiente-->                
                    <li>
                        <a href="#" class="active-menu" id="transferir"><i class="fa fa fa-arrow-circle-up fa-3x"></i>Transferir</a>
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
                <div class="row">
                    <div class="col-md-12">
                     <!--<h2>WEB BANK</h2>-->   
                        <h4>Bienvenido Jhon Deo , disfruta de tu estadia. </h4>
                    </div>
                </div>              
                <hr />
                <!-- ROW -->
                <!-- todo: Aqui se va a cargar las paginas  -->
                <div id="view">
                    <div class="col-md-4 col-sm-4">
                        <div class="panel panel-danger  text-center">
                            <div class="panel-heading">
                                <h3>Transferir</h3>
                            </div>
                            <div class="panel-body">
                                <h4>¿Ya hiciste tu transferencia?</h4>
                                Aquí puedes transferir dinero a otras cuentas que tenga vínculo con Web Bank.
                            </div>
                            <div class="panel-footer">
                                <button type="button" class="btn btn-lg btn-block btn-danger">Ir allí</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="panel panel-danger  text-center">
                            <div class="panel-heading">
                                <h3>Depositar</h3>
                            </div>
                            <div class="panel-body">
                                <h4>¿Te interesa hacer un depósito?</h4>
                                Puedes depositar el monto deseado desde 1000 pesos a la cuenta que quieras sin costo.
                            </div>
                            <div class="panel-footer">
                                <button type="button" class="btn btn-lg btn-block btn-danger">Ir allí</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="panel panel-danger  text-center">
                            <div class="panel-heading">
                                <h3>Retirar</h3>
                            </div>
                            <div class="panel-body">
                                <h4>Retira tu dinero cuando quieras</h4>
                                Con Web Bank tienes la libertidad de escoger el momento y lugar de retirar.
                            </div>
                            <div class="panel-footer">
                                <button type="button" class="btn btn-lg btn-block btn-danger">Ir allí</button>
                            </div>
                        </div>
                    </div>
                </div> 
                <!-- /. ROW -->         
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="js/jquery-3.5.1.js"></script> 
    <script src="js/alertify.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
    <!-- DATA TABLE SCRIPTS -->
    <script src="js/dataTables/jquery.dataTables.js"></script>
    <script src="js/dataTables/dataTables.bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS -->    
    <script src="js/custom.js"></script> 
    <script src="js/script.js"></script>
</body>
</html>

