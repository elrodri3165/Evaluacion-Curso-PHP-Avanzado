<form action="functions/comentarios.php" method="post">
		    <ul>
		        <li><input class="input" placeholder="APELLIDO Y NOMBRE" name="apellidoynombre" type="text"></li>
		        <li><input class="input" placeholder="EMAIL" name="email" type="email"></li>
		        <li><textarea name="comentario" placeholder="COMENTARIO" id="" cols="30" rows="10"></textarea></li>
		        <li><input type="hidden" name="fecha" value="<?php echo date("d-m-Y H:i") ?>"></li>
		        <li><input class="boton" type="submit"></li>
		    </ul>
		</form>