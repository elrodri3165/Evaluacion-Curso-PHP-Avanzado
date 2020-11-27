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
		<h2>Imágenes con PHP</h2>
		<h3 class="h3imagenes">Imágen Original</h3>
		<img src="img/unidad4.jpg" alt="">
		
        <h3 class="h3imagenes">Imágen con marca de agua</h3>
        <img src="functions/marcadeagua.php?archivo=unidad4.jpg" alt="">
        
        <h3 class="h3imagenes">Imágen a eleccion con marca de agua</h3>
        <img src="functions/marcadeagua.php?archivo=apple.jpg" alt="">

		<h3 class="h3imagenes">Vista previa de 150px x 150px</h3>
		<?php
        $foto="img/unidad4.jpg";
        $fuente=@imagecreatefromjpeg($foto);
        $alto=$ancho=150;//defino el alto y ancho nuevo
        
        $img_ancho = imagesx($fuente);
        $img_alto = imagesy($fuente);
        
        $imagen = imagecreate($ancho,$alto); imagecopyresized($imagen,$fuente,0,0,0,0,$ancho,$alto,$img_ancho,$img_alto);
        imagegif($imagen,"img/imagen_2.png");
        echo'<img src="img/imagen_2.png">';
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