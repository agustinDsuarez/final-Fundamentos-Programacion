<?php
    if(isset($_POST['submit'])){
        
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $fecha_nacimiento = $_POST['fecha_nacimiento'];
        $pais = $_POST['pais'];
        $estado_civil = $_POST['estado_civil'];
        $genero = $_POST['genero'];
        $usuario = $_POST['usuario'];
        $contrasenia = $_POST['contrasenia'];
        $repetirContrasenia = $_POST['repetirContrasenia'];

        require_once 'dbh.inc.php';
        require_once 'funciones.inc.php';

        //manejo errores
        if (usuarioYaExiste($conn, $usuario) !== false){
            header("location: ../comencemos.php?error=usuarioyaexiste");
            exit();
        }
        if (contraseniasDiferentes($contrasenia, $repetirContrasenia) !== false){
            header("location: ../comencemos.php?error=contraseniasdiferentes");
            exit();
        }

        crearUsuario($conn, $nombre, $apellido, $fecha_nacimiento, $pais, $estado_civil, $genero, $usuario, $contrasenia);
    } else {
        header("location: ../index.php");
    }
    