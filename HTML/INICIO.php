<?php
    $servidor="sql213.epizy.com";
    $usuario="epiz_34286946";
    $clave="1Q43TQDk5ztorK";
    $base_de_datos="epiz_34286946_PREGUNTAS_USUARIOS";

    $enlace = mysqli_connect ($servidor, $usuario, $clave, $base_de_datos);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="shortcut icon" href="../IMAGENES/Logos/logo (1).png">
    <link href="../ESTILOS/inicio/inicio.css" rel="stylesheet" type="text/css">
    <link href="../ESTILOS/inicio/media_query/tablet/tablet.css" rel="stylesheet" type="text/css" media="screen and (max-width: 768px)">
</head>

<body>
    <main>
        <header> 
            <input type="checkbox" class="checkbox" id="menu-toogle"> <!--Casilla para que el menú se despliegue-->
            <label for="menu-toogle" class="menu-toogle"></label>
            <nav class="barra_de_navegacion">
                <div id="elementos_del_menu">
                    <span id="inicio"><a href="../HTML/INICIO.php">Inicio</a></span> <!--Elementos de navegación-->
                    <span id="publicaciones"><a href="../HTML/publicaciones.html">Publicaciones</a></span> 
                    <span id="nosotros"><a href="../HTML/sobre nosotros.html">Sobre nosotros</a></span>
                </div>
            </nav>
            <span id="titulo">SexSmart</span><!--título-->
            <section class="aviso_principal">
                <span id="aviso">¡Aclara tus dudas
                     <br>de salud sexual y <br>reproductiva!</span>
                <div class="contenedor-imagen">
                    <img id="imagen_preservativos" src="../IMAGENES/Pagina de inicio/Preservativos - vector/vector sin fondo.png" 
                    alt="Imagen de freepik- salud sexual y reproductiva-https://bit.ly/imagen_preservativos"> <!--Vector imágen principal-->
                </div>
                
                <div id="sombras1"></div>
                <div id="sombras2"></div>
            </section>
            <!-- <section>
                <form action="" class="busqueda-form">
                    <label for="" class="busqueda">
                        <input type="text" placeholder="¿TIENES UNA DUDA?" class="busqueda__input">
                        <button class="busqueda__btn">Buscar</button>
                    </label>
                </form> 
            </section> -->
        </header>

        <article>
            <section class="temas">
                <figure class="temas__contenedor">
                    <img src="../IMAGENES/Pagina de inicio/anticonceptivo.png" alt="Anticonceptivo">
                    <figcaption>MÉTODOS ANTICONCEPTIVOS</figcaption>
                </figure>
                <figure class="temas__contenedor">
                    <img src="../IMAGENES/Pagina de inicio/enfermedad-de-transmision-sexual.png" alt="Enfermedades de Transmisión Sexual">
                    <figcaption>ENFERMEDADES DE TRANSMISIÓN SEXUAL</figcaption>
                </figure>
                <figure class="temas__contenedor">
                    <img src="../IMAGENES/Pagina de inicio/embarazada.png" alt="Embarazada">
                    <figcaption>EMBARAZO SEGURO Y DESEADO</figcaption>
                </figure>
            </section>
        </article>

        <article>
            <section class="crear-cuenta">
                <h1>¡Envíanos una pregunta!</h1>
                <form action="#" method="post">
                    <input type="text" placeholder="Nombre" class="cuenta__input" name="nombre">
                    <input type="text" placeholder="Telefono" class="cuenta__input" name="telefono">
                    <input type="email" placeholder="Correo" class="cuenta__input" name="email" required >
                    <br><br>
                    <textarea name="pregunta" rows="4" cols="20" placeholder="Ingresa tu pregunta"></textarea>
                    <br><br>
                    <input type="submit" class="cuenta__btn" placeholder="ENVIAR" name="enviar"> 
                </form>
                
            </section>
        </article>
    </main>
    


</body>
</html>
<?php
    if (isset($_POST['enviar'])){

        $nombre = $_POST ['nombre'];
        $telefono = $_POST ['telefono'];
        $correo = $_POST ['email'];
        $pregunta = $_POST['pregunta'];

        $inserta_los_datos = "INSERT INTO preguntas_realizadas VALUES('$nombre', '$telefono', '$correo', '$pregunta')";

        $ejecutar_la_insercion = mysqli_query($enlace, $inserta_los_datos);
    }
?>