<?php
session_start();
//Se valida si existe la varible de cerrar sesion, esta se envia cuando se cierra sesion en algun perfil abierto
    $_SESSION = array(); // Destroy the variables
    session_unset();
    session_write_close();
    session_destroy(); // Destroy the session
