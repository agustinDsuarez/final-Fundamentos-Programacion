<?php 
    include 'header.php';
?>

<div class="container mt-5">  
        <div class="row">
                <?php
                  $id = $_REQUEST['id'];
                  $sql = "SELECT * FROM tickets WHERE id = $id";
                  $stmt = mysqli_stmt_init($conn);
                  if(!mysqli_stmt_prepare($stmt, $sql)){
                    echo "SQL falló";
                  } else {
                    mysqli_stmt_execute($stmt);
                    $resultado = mysqli_stmt_get_result($stmt);
                    while ($row = mysqli_fetch_assoc($resultado)){
                      echo '<div class="container py-5 h-100">
                                        <div class="row d-flex justify-content-center align-items-center h-100">
                                            <div class="col col-lg-6 mb-4 mb-lg-0">
                                                <div class="card mb-3" style="border-radius: .5rem;">
                                                    <div class="row g-0">
                                                        <div class="col-md-4 gradient-custom text-center text-white" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                                            <div class="mt-3 ms-1"><!--imagen perfil-->
                                                                <img class="rounded" style="width: 100%; height: auto;" src="img/logo.jpg"/>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-body p-4">
                                                                <h6>Información</h6>
                                                                    <hr class="mt-0 mb-4">
                                                                        <div class="row pt-1">
                                                                        <div class="col-6 mb-3">
                                                                            <h6>Partido</h6>
                                                                                <p class="text-muted">
                                                                                '.$row["partido_vs"].'
                                                                                </p>
                                                                        </div>
                                                            <div class="col-6 mb-3">
                                                                <h6>¿Cuando se juega?</h6>
                                                                <p class="text-muted">
                                                                '.$row["fecha"].'
                                                                </p>
                                                            </div>
                                                            <div class="col-6 mb-3">
                                                                <h6>Precio ticket</h6>
                                                                <p class="text-muted">
                                                                $ '.$row["precio"].' USD
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="includes/comprar.inc.php" method="post">
                                    <div class="form-group">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="tarjeta" value="'.$row["precio"].'" required>
                                        <label class="form-check-label" for="inlineRadio1">Visa</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="tarjeta" value="'.$row["precio"].'"required>
                                        <label class="form-check-label" for="inlineRadio1">MasterCard</label>
                                    </div>
                                    <div class="input-group mt-2">
                                        <span class="input-group-text">Número y CVV</span>
                                        <input type="number" class="form-control" placeholder="Número" required>
                                        <input type="number" class="form-control" placeholder="CVV" required>
                                    </div>      
                                                <div class="mt-2 form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" value="'.$row["precio"].'" name="descuento">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Descuento para menores
                                                        </label>
                                                </div>
                                                <div class="mt-2 form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" value="'.$row["precio"].'" name="descuento_todos_tickets">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Pedir descuento del 10% 
                                                        </label>
                                                </div>
                                                <div class="mt-2">
                                                <input class="form-check-input" type="checkbox" value="'.$row["partido_vs"].'" name="partido" required>
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Confirmar compra
                                                    </label>
                                                </div>
                                                
                                                    <div class="mt-4 d-grid gap-2">
                                                        <button class="btn btn-outline-success" type="submit" name="comprar">Realizar compra</button>
                                                    </div>
                                                </div>
                                            
                                        </form>'
                                    ;}}?>    
            </div>
            
</div>