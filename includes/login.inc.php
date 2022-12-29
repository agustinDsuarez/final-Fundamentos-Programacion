<?php 
    //se obtienen los datos del formulario de inicio de sesión
    if(isset($_POST['submit'])) {
        $usuario = $_POST['usuario'];
        $contrasenia = $_POST['contrasenia'];

        require_once 'dbh.inc.php';
        require_once 'funciones.inc.php';

        loginUsuario($conn, $usuario, $contrasenia);
    
    } else {
        header('location: ../login.php');
        exit();
    } 