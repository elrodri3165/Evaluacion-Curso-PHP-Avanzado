<?php

require 'functions/conexion.php';

$query = "SELECT * FROM clases";
    
?>    
<!DOCTYPE html>
<html lang="es">
<?php include ("templates/head.php");?>
 
<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	
	<nav>
		<?php include("templates/botonera.php"); ?>
	</nav>
	</header>
	<section>
		<h2>Ver clases</h2>
		<?php include ("templates/contenedorclases.php"); ?>
		<div class="table">
        <div class="clases">
                   Clases
               </div>
               <div class="fechas">
                   Fechas
               </div>
               <?php
        $resultado = mysqli_query($conexion, $query);
        while ($clases= mysqli_fetch_assoc ($resultado)){ ?>
                <div class="clases">
                  <?php echo $clases['unidad'];?>
                </div>
                <div class="fechas">
                    <?php echo $clases['fecha'];?>
                </div>
        <?php
        }
        ?>
        </div>
	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>