<?php 
    include 'header.php';
?>

<div class="container mt-5">
    <h2 class="titulo">Cuartos de final</h2>
        <div class="btn-group dropdown">
            <button type="button" class="btn btn-outline-primary dropdown-toggle fw-semibold" data-bs-toggle="dropdown" aria-expanded="false">
                Mostrar por:
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="tickets.php">Fase de grupos</a></li>
                <li><a class="dropdown-item" href="octavos.php">Octavos de final</a></li>
                <li><a class="dropdown-item" href="cuartos.php">Cuartos de final</a></li>
                <li><a class="dropdown-item" href="semi.php">Semifinales</a></li>
                <li><a class="dropdown-item" href="final.php">Final</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" style="background-color: var(--clr-success); color: white;" href="combo.php">Obtener pase completo</a></li>
            </ul>
        </div>    

       
        
        <div class="row">
                <?php
                  $sql = "SELECT * FROM tickets WHERE tipo_partido = 'Cuartos' ORDER BY id ASC";
                  $stmt = mysqli_stmt_init($conn);
                  if(!mysqli_stmt_prepare($stmt, $sql)){
                    echo "SQL falló";
                  } else {
                    mysqli_stmt_execute($stmt);
                    $resultado = mysqli_stmt_get_result($stmt);
                    while ($row = mysqli_fetch_assoc($resultado)){
                      echo ' <div class="col-4 d-flex justify-content-center align-items-center mb-5">
                                <div class="card text-white bg-dark mt-5">
                                <div class="card-body" style="width: 18rem;">
                                <h5 class="card-title">'.$row["tipo_partido"].'</h5>
                                <p class="card-text">'.$row["fecha"].'</p>
                                <p class="card-text">$'.$row["precio"].' USD</p>
                                <a href="comprar.php?id='.$row["id"].'" class="btn btn-primary">Comprar</a>
                            </div>
                        </div>
                        </div> 
                    ';
                    }}
                ?>    
            </div>
            
</div>
