<?php 
    session_start();
    //se obtienen los datos de las compras
    if(isset($_POST['comprar'])) {
        $partido = $_POST['partido'];
        $precio = $_POST['tarjeta'];
        $descuento = $_POST['descuento'];
        $usuario = $_SESSION['usuario'];
        

        require_once 'dbh.inc.php';
        require_once 'funciones.inc.php';

        comprar($conn, $partido, $precio, $usuario);
    
    } else {
        header('location: ../login.php');
        exit();
    } 