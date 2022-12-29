<?php
    //-----------------REGISTRO-------------------------//

    //se lee la base de datos y se confirma que el usuario ingresado y el email no existen antes de crear la cuenta
    function usuarioYaExiste($conn, $usuario) {
        $sql = "SELECT * FROM usuarios WHERE usuario = ?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../index.php?error=stmtfallo");
            exit();
        }
    
            mysqli_stmt_bind_param($stmt, "s", $usuario);
            mysqli_stmt_execute($stmt);
    
            $resultData = mysqli_stmt_get_result($stmt);
    
            if ($row = mysqli_fetch_assoc($resultData)) {
                return $row;
            }
            else {
                $resultado = false;
                return $resultado;
            }
            mysqli_stmt_close($stmt);
    }

    //se verifica que las contraseñas sean iguales
    function contraseniasDiferentes($contrasenia, $repetirContrasenia){
        $resultado;
        if($contrasenia !== $repetirContrasenia) {
            $resultado = true;
        } else {
            $resultado = false;
        }
        return $resultado;
    }

    //finalmente se graban los datos del usuario en la base de datos
    function crearUsuario($conn, $nombre, $apellido, $fecha_nacimiento, $pais, $estado_civil, $genero, $usuario, $contrasenia) {
        $sql = "INSERT INTO usuarios (nombre, apellido, fecha_nacimiento, pais, estado_civil, genero, usuario, contrasenia) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../index.php?error=stmtfallo");
            exit();
        }

            $hashedPwd = password_hash($contrasenia, PASSWORD_DEFAULT);//se encripta la contraseña

            mysqli_stmt_bind_param($stmt, "ssssssss", $nombre, $apellido, $fecha_nacimiento, $pais, $estado_civil, $genero, $usuario, $hashedPwd);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            echo "<div class='alert alert-success text-center' role='alert'>
            Cuenta creada satisfactoriamente
            </div>";
            header("location: ../login.php?error=ninguno"); //en caso de que todo funcione, se redirecciona a la pagina login donde se puede iniciar sesión
            exit();
    }
    
    //--------------INICIO DE SESIÓN----------------//
    function loginUsuario($conn, $usuario, $contrasenia){
        $usuarioYaExiste = usuarioYaExiste($conn, $usuario, $contrasenia);
        //manejo de errores
        if($usuarioYaExiste === false) {
            header("location: ../login.php?errorlogin");
        }

        $hashedPwd = $usuarioYaExiste['contrasenia'];
        $checkPassword = password_verify($contrasenia, $hashedPwd);

        if($checkPassword === false){
            header("location: ../login.php?error=errorlogin");
        } else if ($checkPassword === true){
            session_start();
            $_SESSION["usuariosid"] = $usuarioYaExiste["usuariosId"];
            $_SESSION["usuario"] = $usuarioYaExiste["usuario"];

            header("location: ../index.php");
            exit();
        }
    }

    //compra el ticket
    function comprar($conn, $partido, $precio, $usuario){
        $sql = "INSERT INTO compras (partido, precio, usuario) VALUES (?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../admin.php?error=stmtfallo");
            exit();
        }
            
            $descuento = $precio*0.2;

            if(isset($_POST['descuento'])){
                mysqli_stmt_bind_param($stmt, "sss", $partido, $descuento, $usuario);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_close($stmt);
                echo "<div class='alert alert-success text-center' role='alert'>
                Ticket comprado 
                </div>";
                header("location: ../tickets.php?error=comprarealizada"); //en caso de que todo funcione, se redirecciona a la pagina login donde se puede iniciar sesión
                exit();
            } else {
                mysqli_stmt_bind_param($stmt, "sss", $partido, $precio, $usuario);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_close($stmt);
                echo "<div class='alert alert-success text-center' role='alert'>
                Ticket comprado 
                </div>";
                header("location: ../tickets.php?error=comprarealizada"); //en caso de que todo funcione, se redirecciona a la pagina login donde se puede iniciar sesión
                exit();
            }

            
           
    }

    
    