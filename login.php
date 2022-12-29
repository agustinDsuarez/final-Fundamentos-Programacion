<?php 
    include 'links.php' 
?>

<body class="comencemos">
    <div class="container mt-5">
        <a href="index.php" class="btn btn-outline-dark">Volver a inicio</a>
        <h1 class="text-center">
            Accede a tu cuenta
        </h1>
        <p class="text-center">¿Aún no tenés una cuenta? No hay problema, <a href="comencemos.php">creá una</a></p>

        <div class="d-flex justify-content-center mt-5">
            <form action="includes/login.inc.php" class="form" method="post">
                    <div class="mb-3">
                        <label for="usuario" class="form-label fw-semibold">Tu usuario</label>
                        <input type="text" class="form-control" name="usuario" required>
                    </div>
                    <div class="mb-4">
                        <label for="contrasenia" class="form-label fw-semibold">Tu contraseña</label>
                        <input type="password" class="form-control" name="contrasenia" required>
                    </div>
                    <div class="d-grid gap-2 mb-4">
                        <button class="btn btn-primary fw-semibold boton" name="submit" type="submit">Iniciar sesión</button>
                    </div>
            </form>
        </div>
        <div class="container | intro">
            <?php
            if(isset($_GET["error"])){
                if($_GET["error"] == "ninguno"){
                    echo "<div class='alert alert-success text-center' role='alert'>¡Tú cuenta se creó! por favor iniciá sesión
                            </div>";
                    exit();
                }
                else if($_GET["error"] == "errorlogin"){
                    echo "<div class='alert alert-danger text-center' role='alert'>Ups... parece que los datos no coinciden con ninguna cuenta registrada
                    <br>
                    ¿No tenés cuenta? Create una <a href='comencemos.php'>acá</a></div>";
                }
            }
            ?>
        </div>
    </div>
    