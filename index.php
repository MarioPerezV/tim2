<!DOCTYPE html>
<html lang="es">
<head>
<?php require 'plantillas/head.php'; ?>
</head>
<body>
<header>
<?php require 'plantillas/navbar.php'; ?>
</header>
<?php //Version(10-11)  Mario Perez Vilchez - API 2 - ProgAppWeb
$nombre = $edad = $interesado = "";
    // Verifica si el formulario fue enviado mediante POST
function solicitar_datos_usuario() {
    global $nombre, $edad, $interesado;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
        $nombre = htmlspecialchars($_POST['nombre']);
        $edad = $_POST['edad'];
        $interesado = isset($_POST['interesado']) ? 'Sí' : 'No';  // Verifica si el checkbox fue marcado
    }
}
// Las 5 imágenes
$img1='<img src="img/B1.png" class="rounded" width="200" alt="primer Desafío juegan blancas">';
$img2='<img src="img/N1.png" class="rounded-circle" width="200" alt="segundo Desafío juegan negras">';
$img3='<img src="img/B2.png" class="rounded" width="200" alt="tercer Desafío juegan blancas">';
$img4='<img src="img/N2.png" class="rounded-circle" width="200" alt="cuarto Desafío juegan negras">';
$img5='<img src="img/B3.png" class="rounded" width="200" alt="quinto Desafío juegan blancas">';
// Los 5 párrafos
$parrafo1='<p class="parrafo-1">El ajedrez es más que un simple juego, es una actividad que estimula la mente y fomenta el pensamiento estratégico. Un club permite a los miembros intercambiar conocimientos, mejorar sus habilidades y disfrutar de la competencia amistosa, creando así una comunidad unida por el amor al juego.</p>';
$parrafo2='<p class="parrafo-2">Los torneos son una parte fundamental de la vida de nuestro club de ajedrez. Estos eventos no solo permiten a los jugadores medir sus habilidades contra otros, sino que también generan un sentido de comunidad y motivación.</p>';
$parrafo3='<p class="parrafo-3">Promueve el desarrollo de habilidades sociales. A través de la interacción constante con otros miembros, los jugadores aprenden a comunicarse mejor, a trabajar en equipo y a respetar a sus oponentes. Estas habilidades también se trasladan a otras áreas de la vida, fortaleciendo la autoestima y fomentando un ambiente de apoyo mutuo.</p>';
$parrafo4='<p class="parrafo-4">Uno de los principales beneficios de pertenecer a nuestro club de ajedrez es el acceso a un entorno de aprendizaje enriquecedor. Los jugadores experimentados pueden actuar como mentores para los principiantes, ofreciendo consejos y tácticas que pueden transformar la manera en que juegan.</p>';
$parrafo5='<p class="parrafo-5">Las personas de todas las edades y niveles de habilidad son bienvenidas, lo que enriquece la experiencia de todos los miembros. La diversidad de perspectivas y estilos de juego en nuestro club fomenta un entorno en el que todos pueden aprender y disfrutar del ajedrez, creando una comunidad vibrante y activa que trasciende el simple hecho de jugar.</p>';
// Carrusel
$carrusel='<div class="container text-center my-3">
            <div id="carouselExampleIndicators" class="carousel slide mt-3" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-center">
                            <img class="d-block w-30" src="img/B2.png" alt="primera imagen">
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <h2 class="negra">Juegan Blancas</h2>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center">
                            <img class="d-block w-30" src="img/N2.png" alt="segunda imagen">
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <h2 class="negra">Juegan Negras</h2>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center">
                            <img class="d-block w-30" src="img/B3.png" alt="tercera imagen">
                        </div>
                        <div class="carousel-caption d-none d-md-block">
                            <h2 class="negra">Juegan Blancas</h2>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </a>
            </div>
        </div>';?>
    <div class="container my-5 py-5">
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 bg-primary my-3 py-3" style="color: #ffffff;"> <!-- py=padding(margen interno) en eje y (vertical) -->
                <h2>Formulario de Inscripción al Torneo</h2>
                <form method="POST" action=""><!-- Se mantiene la información en la misma página -->
                    <div class="py-2">
                        <label for="nombre" class="form-label">Nombre y apellido</label>
                        <input type="text" class="form-control" id="nombre" rows="1" name="nombre" placeholder="Nombre" required>
                    </div>
                    <div class="py-2">
                        <label for="edad" class="form-label">Edad</label>
                        <input type="number" class="form-control" id="edad" name="edad" min="1" max="99" placeholder="Edad" required>
                    </div>
                    <div class="py-2">
                        <label for="interesado">¿Interesado en información adicional?</label>
                        <input type="checkbox" id="interesado" name="interesado"><br><br>
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-success" type="submit">Enviar Datos</button>
                        <button class="btn btn-secondary" type="reset">Limpiar</button> <!-- No lo puedo hacer funcionar -->
                    </div>         
                </form>
            </div>
            <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8 bg-light my-3 p-3" style="color: blue;">
                <div class="container text-center">
                    <img src="img/club.jpeg" alt="Logo club" width="300">
                    <h2 class="text-center">Bienvenid@ al Club <?php echo $nombre; ?></h2> <!-- No me funciona el echo que está dentro de la etiqueta h2-->
                    <?php // Llamada a la función para procesar el formulario 
                        $solicitud = solicitar_datos_usuario();// No sé cuál es el error, aunque funciona igual, me aparece subrayado amarillo la función, 
// lo hice sin función y me resultó más facil, pero lo dejo con función para cumplir con la consigna aunque me resulte más complejo
                    // if ($_SERVER["REQUEST_METHOD"] == "POST") {  Eliminado
                            // Se muestran los datos recibidos por el formulario
                        if ($edad < 18) {
                            echo $solicitud;
                            echo "<h2>Datos recibidos:</h2>";
                            echo "<h4>Nombre: " . $nombre . "<br>";
                            echo "Edad: " . $edad . "<br>";
                            echo "Información adicional: " . $interesado . "</h4><br>al final de la página está la información<br>";
                            echo '<h3 class="text-center">Tenemos desafíos para menores de edad:</h3>';
                            echo $img1;
                            echo $img2;
                            echo '<h3>Información para menores de edad:</h3>';
                            echo $parrafo3;
                            echo $parrafo4;
                            echo $parrafo5;
                        } else if ($edad >= 18) {
                            echo $solicitud;
                            echo "<h2>Datos recibidos:</h2>";
                            echo "<h4>Nombre: " . $nombre . "<br>";
                            echo "Edad: " . $edad . "<br>";
                            echo "Información adicional: " . $interesado . "</h4><br>al final de la página está la información<br>";
                            echo '<h3 class="text-center">Tenemos desafíos para mayores de edad:</h3>';
                            echo $img3;
                            echo $img4;
                            echo $img5;
                            echo '<h3>Información para mayores de edad:</h3>';
                            echo $parrafo1;
                            echo $parrafo2;
                        } else {
                            $nombre = $edad = $interesado = "";
                        } 
                        if ($interesado == 'Sí'){
                            echo '<h1>Vemos que estas interesado</h1>';
                            echo $carrusel;
                        }
                    ?>
                </div>
            </div>
        </div> 
    </div>
<?php require 'plantillas/footer.php'; ?>