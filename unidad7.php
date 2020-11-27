<!DOCTYPE html>
<html lang="es">
<?php   
include ("templates/head.php");
session_start();?>
<body>

    <div class="container">
        <header>
            <h1>Programación en PHP y MySQL - Nivel Avanzado</h1>


            <nav>
                <?php include("templates/botonera.php"); ?>
                <a class="boton" href="functions/cerrarsession.php">Cerrar Session</a>
            </nav>
        </header>
        <section>
            <h2>Compras</h2>
            <?php        

        $base = new Conexion(SERVIDOR, USUARIO, CLAVE, BASE);
        $producto = new Productosdb($base);
        
        $mostrar_productos = $producto->Traerproductos();
        
        foreach ($mostrar_productos as $producto){?>

            <div class="table2">
                <div class="producto">
                    Nombre: <?php echo $producto['producto'];?>
                </div>
                <div class="descripcion">
                    <?php echo $producto['descripcion'];?>
                </div>
                <div class="precio">
                    Precio: <?php echo $producto['precio'];?>
                </div>
                <a href="functions/Cargarproducto.php?codigo=<?php echo $producto['codigo'];?>">
                    <div class="boton">
                        Comprar
                    </div>
                </a>
            </div>
            <?php
        }
        ?>
        </section>
        <aside>
            <h2>Carrito</h2>
            <?php
        
            if (isset ($_SESSION['carrito'])){
        
            }else{
            
                $_SESSION['carrito'] = new Carrito();
            }   
        
            $ver= $_SESSION['carrito']->Mostrar_carrito();
    
            ?>
        </aside>
        <footer>
            <a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
        </footer>

    </div>
</body>

</html>
