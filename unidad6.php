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
		<h2>Usuarios</h2>
		<?php
        require 'functions/usuarios.php';
        require 'functions/caract_usuarios.php';
        ?>
	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>