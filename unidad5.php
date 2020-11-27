<?php
session_start();
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
		<h2>Consultas</h2>
		<form action="functions/cargar.php" method="post">
        <?php
            function crearnumero(){
                $letras="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
                $numeros="0123456789";
                
                $codigo=$letras[rand(0, 51)].$numeros[rand(0, 9)].$letras[rand(0, 51)].$numeros[rand(0, 9)].$letras[rand(0, 51)];
                return $codigo;
            }
           $_SESSION['captcha']= crearnumero();
        ?>
		    <ul>
		        <li><input class="input" name="nombre" type="text" maxlength="30" placeholder="Nombre" required></li>
		        <li><input class="input" name="apellido" type="text" maxlength="30" placeholder="Apellido" required></li>
		        <li><input class="input" name="email" type="email" maxlength="30" placeholder="Email" required></li>
		        <li><input class="input" name="consulta" type="text" maxlength="255" placeholder="Consulta" required></li>
		        <label for="captcha">Captcha - > Introduza las letras y números de la foto. Tener en cuenta mayúsculas y minúsculas</label>
		        <li><img src="functions/captcha.php" alt=""></li>
		        <li><input class="input" name="captcha" type="text" placeholder="Captha" required> </li>
		        <li><input class="boton" type="submit"></li>
		    </ul>
		</form>
		<?php
        if(isset($_GET['ok'])){?>
            <p>El registro se ha cargado exitosamente en la base de datos!</p>
        <?php
        }
        if(isset($_GET['eror'])){?>
            <p>El CAPTCHA no es correcto!!!! Vuelva a intentar. No se guardo registro en la base de datos</p>
        <?php
        }
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