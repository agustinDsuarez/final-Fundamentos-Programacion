<?php 
    include 'header.php';
?>

<div class="container mt-5">  
<h2 class="titulo">Mis tickets</h2>
        <div class="row">
                <?php
                if(isset($_SESSION['usuario'])){
                  $sql = "SELECT * FROM compras ORDER BY id DESC";
                  $stmt = mysqli_stmt_init($conn);
                  if(!mysqli_stmt_prepare($stmt, $sql)){
                      echo "SQL fallo";
                  } else {
                      mysqli_stmt_execute($stmt);
                      $resultado = mysqli_stmt_get_result($stmt);
                      while ($row = mysqli_fetch_assoc($resultado)){ 
                        $usuario = $row['usuario'];
                        if($_SESSION['usuario'] == $usuario){
                      echo '<div class="col-4 d-flex justify-content-center align-items-center mb-5">
                                <div class="card  border mt-5">
                                <div class="card-body" style="width: 18rem;">
                                <h5 class="card-title">'.$row["partido"].'</h5>
                                <p class="card-text">$'.$row["precio"].' USD</p>
                                
                            </div>
                        </div>
                        </div> 
                           ';}}}}?>    
            </div>
            
</div>