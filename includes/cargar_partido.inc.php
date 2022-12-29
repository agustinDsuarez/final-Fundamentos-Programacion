<?php 
    
    //se obtienen los datos del formulario de partidos
    if(isset($_POST['cargar'])) {
        $paisA = $_POST['paisA'];
        $paisB = $_POST['paisB'];
        $fecha = $_POST['fecha'];
        $grupo = $_POST['grupo'];

        require_once 'dbh.inc.php';
        require_once 'funciones.inc.php';

        cargarPartido($conn, $paisA, $paisB, $fecha, $grupo);
    
    } else {
        header('location: ../login.php');
        exit();
    } 