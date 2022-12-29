<?php 
  include 'header.php';
?>
      <section class="inicio">
        <div class="container p-2 mt-5 d-flex">
          <?php
              if(isset($_SESSION['usuario'])){
                 echo '<div>
                        <div class="mt-5 float-start">
                            <h1 class="titulo | mt-5">Cada vez más cerca</h1>
                            <p class="parrafo | fw-semibold">Comprá las entradas para ver a la selección en <span class="marca">goal</span></p>
                            <a class="btn btn-primary fw-semibold mb-5" href="tickets.php">Comprar entradas</a>
                        </div>
                            <img src="img/sesion.jpg" class="float-end ms-auto justify-content-end | intro" alt="Julian Alvarez">
                    </div>
                  </div>';
               } else {
                 echo '<div>
                    <div class="mt-5 float-start">
                        <h1 class="titulo | mt-5">Te llevamos al mundial</h1>
                        <p class="parrafo | fw-semibold">Comprá las entradas para ver a la selección en <span class="marca">goal</span></p>
                        <a class="btn btn-primary fw-semibold mb-5" href="comencemos.php">Quiero ir a Qatar</a>
                    </div>
                        <img src="img/intro.jpg" class="float-end ms-auto justify-content-end | intro" alt="Julian Alvarez">
                </div>
              </div>
              ';}?>

    

