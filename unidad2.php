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
		<h2>Eventos</h2>
		<h3>Calculador de fechas</h3>
		<p>Puede elegir un dia con el selector, y al dar click en el boton calcular, el sistema hara la cuenta de cuantos dias enteros faltan para ese dia. No calcula porciones menores a un dia</p>
		<form action="functions/calcular_fecha.php" method="post">
		    <ul>
		        <li><select name="dia" id="">
		            <option value="01">1</option>
		            <option value="2">2</option>
		            <option value="3">3</option>
		            <option value="4">4</option>
		            <option value="5">5</option>
		            <option value="6">6</option>
		            <option value="7">7</option>
		            <option value="8">8</option>
		            <option value="9">9</option>
		            <option value="10">10</option>
		            <option value="11">11</option>
		            <option value="12">12</option>
		            <option value="13">13</option>
		            <option value="14">14</option>
		            <option value="15">15</option>
		            <option value="16">16</option>
		            <option value="17">17</option>
		            <option value="18">18</option>
		            <option value="19">19</option>
		            <option value="20">20</option>
		            <option value="21">21</option>
		            <option value="22">22</option>
		            <option value="23">23</option>
		            <option value="24">24</option>
		            <option value="25">25</option>
		            <option value="26">26</option>
		            <option value="27">27</option>
		            <option value="28">28</option>
		            <option value="29">29</option>
		            <option value="30">30</option>
		            <option value="31">31</option>
		        </select></li>
		        
		        <li><select name="mes" id="">
                <option value="01">enero</option>
                <option value="02">febrero</option>
                <option value="03">marzo</option>
                <option value="04">abril</option>
                <option value="05">mayo</option>
                <option value="06">junio</option>
                <option value="07">julio</option>
                <option value="08">agosto</option>
                <option value="09">septiembre</option>
                <option value="10">octubre</option>
                <option value="11">noviembre</option>
                <option value="12">diciembre</option>
		            
		        </select></li>
		        <li><input type="number" value="2020" maxlength="2999" max="2999" min="2020" name="anio"></li>
		        <li><input type="submit" value="Calcular"></li>
		    </ul>
		</form>
		<?php
        if (isset ($_GET['diferencia'])){?>
          <h1>Hoy es <?php echo date('d-m-Y')?></h1>
          <h1>Para el dia que fue elegido, faltan: <?php echo $_GET['diferencia']?> dias.</h1>
        <?php
        }
        if (isset ($_GET['error'])){?>
          <h2>Debe elegir una fecha posterior al dia de hoy, sino el resultado seria negativo.</h2>
		<?php
		}?>
	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>