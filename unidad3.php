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
		<h2>Comentarios</h2>
		<h3>Ingrese sus comentarios con el siguiente formulario, los datos seran guardados en el arhivo comentarios.txt. Sino existe se creara automaticamente</h3>
		<?php include ("templates/comentarios.php")?>
		<?php include ("templates/buscarcomentarios.php");?>
	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>