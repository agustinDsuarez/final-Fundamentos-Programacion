<?php
    include 'links.php' 
?>
<body class="navegacion">
    <nav class="navbar static-top fw-semibold">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">goal</a>
          <ul class="nav justify-content-end">
          <?php
                if(isset($_SESSION['usuario'])){
                  echo '<li class="nav-item mx-3">
                        <div class="btn-group dropstart">
                          <button type="button" class="btn btn-outline-primary dropdown-toggle fw-semibold" data-bs-toggle="dropdown" aria-expanded="false">
                            Tickets
                          </button>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="tickets.php">Fase de grupos</a></li>
                            <li><a class="dropdown-item" href="octavos.php">Octavos de final</a></li>
                            <li><a class="dropdown-item" href="cuartos.php">Cuartos de final</a></li>
                            <li><a class="dropdown-item" href="semi.php">Semifinales</a></li>
                            <li><a class="dropdown-item" href="final.php">Final</a></li>
                          </ul>
                        </div>
                        </li>
                        <li class="nav-item">
                        <div class="btn-group dropstart">
                            <button type="button" class="btn btn-outline-success dropdown-toggle fw-semibold" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bx bxs-user"></i> Mi perfil
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="perfil.php?usuario='.$_SESSION["usuario"].'">Mis compras</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" style="background-color: var(--clr-danger); color: white;" href="includes/logout.inc.php">Cerrar sesión</a></li>
                            </ul>
                          </div>
                        </li>';
                  } else {
                    echo '
                    <li class="nav-item">
                      <a class="nav-link" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title=
                      "Para poder acceder a los tickets y comenzar a comprar, primero debe registrarse o iniciar sesión"
                      style="cursor: help;" data-bs-custom-class="custom-tooltip">¿Cómo se usa?</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="login.php">Acceder</a>
                    </li>
                    <li class="nav-item">
                      <a class="btn btn-outline-dark fw-semibold | comencemos_boton" href="comencemos.php">Comencemos</a>
                    </li>
                ';
                }?>
          </ul>
        </div>
      </nav>