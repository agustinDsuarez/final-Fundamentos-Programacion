<?php 
    include 'links.php';
?>
<body class="comencemos">
    <div class="container mt-5">
        <a href="index.php" class="btn btn-outline-dark">Volver a inicio</a>
        <h1 class="text-center">
            Comencemos
        </h1>
        <p class="text-center">Primero crea tu cuenta. ¿Ya tenés una cuenta? <a href="login.php">Accedé</a></p>

        <div class="d-flex justify-content-center mt-5">
            <form action="includes/registro.inc.php" class="form" method="post">
                <div class="mb-3">
                    <label for="Nombre" class="form-label fw-semibold">Tu nombre</label>
                    <input type="text" class="form-control" name="nombre" required autofocus>
                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label fw-semibold">Tu apellido</label>
                    <input type="text" class="form-control" name="apellido" required>
                </div>
                <div class="mb-3">
                    <label for="fecha_nacimiento" class="form-label fw-semibold">Tu fecha de nacimiento</label>
                    <input type="date" class="form-control" name="fecha_nacimiento" required>
                </div>
                <div class="mb-3">
                    <label for="pais" class="form-label fw-semibold">Tu pais</label>
                    <select name="pais" class="form-select">
                        <!-- en este bloque php se cargan los paises del select-->
                        <?php
                            $pais = array(
                                'Alemania',
                                'Arabia Saudita',
                                'Argentina',
                                'Australia',
                                'Bélgica',
                                'Brasil',
                                'Camerún',
                                'Canadá',
                                'Corea del Sur',
                                'Costa Rica',
                                'Croacia',
                                'Dinamarca',
                                'Ecuador',
                                'España',
                                'Estados Unidos',
                                'Francia',
                                'Gales',
                                'Ghana',
                                'Holanda',
                                'Inglaterra',
                                'Irán',
                                'Japón',
                                'Marruecos',
                                'México',
                                'Portugal',
                                'Polonia',
                                'Senegal',
                                'Serbia',
                                'Suiza',
                                'Túnez',
                                'Uruguay',
                                'Qatar'
                            );
                            foreach($pais as $p){
                                echo "<option value=' $p'>$p</option>";
                            }
                        ?>
                    </select>  
                </div>
                <div class="mb-3">
                    <label for="estado_civil" class="form-label fw-semibold">Tu estado civil</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="estado_civil" value="soltero" checked>
                        <label class="form-check-label" for="soltero">
                            Solter@
                        </label>
                        </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="estado_civil" value="casado">
                        <label class="form-check-label" for="casado">
                                Casad@
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="estado_civil" value="viudo">
                        <label class="form-check-label" for="viudo">
                            Viud@
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="estado_civil" value="divorciado">
                        <label class="form-check-label" for="divorciado">
                            Divorciad@
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="genero" class="form-label fw-semibold">Tu género (según aparezca en tu documento de identidad)</label>
                        <div class="form-check">
                                <input class="form-check-input" type="radio" name="genero" value="masculino" checked>
                                <label class="form-check-label" for="masculino">
                                    Masculino
                                </label>
                        </div>
                        <div class="form-check">
                                <input class="form-check-input" type="radio" name="genero" value="femenino">
                                <label class="form-check-label" for="femenino">
                                    Femenino
                                </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="usuario" class="form-label fw-semibold">Tu usuario</label>
                        <input type="text" class="form-control" name="usuario" required>
                    </div>
                    <div class="mb-3">
                        <label for="contrasenia" class="form-label fw-semibold">Tu contraseña</label>
                        <input type="password" class="form-control" name="contrasenia" required>
                    </div>
                    <div class="mb-4">
                        <label for="repetirContrasenia" class="form-label fw-semibold">Repetí tu contraseña</label>
                        <input type="password" class="form-control" name="repetirContrasenia" required>
                    </div>
                    <div class="d-grid gap-2 mb-4">
                        <button class="btn btn-primary fw-semibold boton" name="submit" type="submit">Crear tu cuenta</button>
                    </div>
            </form>
        </div>
        <div class="container | intro">
            <?php
                //alertas segun el error
                if(isset($_GET["error"])){
                    if ($_GET["error"] == "stmtfallo"){
                        echo "<div class='alert alert-primary text-center' role='alert'>
                        Ups... Ha ocurrido un error, por favor intenta nuevamente
                    </div>";
                    }
                    else if($_GET["error"] == "contraseniasdiferentes"){
                        echo "<div class='alert alert-danger text-center' role='alert'>
                        Las contraseñas no coinciden.
                    </div>";
                    }
                    else if($_GET["error"] == "usuarioyaexiste"){
                        echo "<div class='alert alert-danger text-center' role='alert'>
                        El usuario ya existe.
                    </div>";
                    }
                    else if($_GET["error"] == "ninguno"){
                        header("location: login.php?error=ninguno");
                        exit();
                }}?>
            </div>
    </div>
