<?php
    //se establece una conexión con la base de datos
    $serverNombre = "localhost";
    $bdUser = "root";
    $bdContraseña = "";
    $bdNombre = "final_fundamentos";

    $conn = mysqli_connect($serverNombre, $bdUser, $bdContraseña, $bdNombre);

    if(!$conn) {
        die("La conexión falló: " . mysqli_connect_error());
    }