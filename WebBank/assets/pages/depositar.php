<?php
    session_start();//Inicio de sesion
    //Validacion para comprobar si ya se ha iniciado sesion
    //Esto sirve para no permitir navegar entre paginas sin haberse logueado
    if(!isset($_SESSION['id'])){
        //no permite que se entre a las demas vistas por medio de la url
        header("location: ../index.php");
    }
?> 
<div class="col-md-12">
    <!-- Form Elements -->
    <div class="panel panel-default">
        <div class="panel-heading">
            Formulario de Deposito
        </div>
        <div class="panel-body">
            <div class="row">
                    <div class="col-md-12">
                        <h3>Informaci&oacute;n Basica</h3>
                        <form role="form">
                            
                            <div class="form-group col-md-6">
                                <label>Monto a Depositar</label>
                                <input class="form-control" />
                            </div>
                            
                            <div class="botones">
                                <button type="reset" class="btn btn-default pull-md-8">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Depositar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- End Form Elements -->
</div>