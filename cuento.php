<!DOCTYPE html>
<html lang="es">
<head>
<?php require 'plantillas/head.php'; ?>
</head>
<body>
<header>
<?php require 'plantillas/navbar.php'; ?>
</header>
<?php    // Establecemos los idiomas posibles. 
$idioma = isset($_GET['idioma']) ? $_GET['idioma'] : 'es';
// Array con Cuentos en diferentes idiomas
$cuentos = [
    'es' => [
        'presentacion'=> '<h3>El Cuento de hoy:</h3>',
        'titulo' => '<h1> El último movimiento</h1>',
        'texto' => '<h3>Resumen:</h3><h5> En un tablero de ajedrez infinito, un peón emprende el viaje de su vida para salvar a su reina, con la ayuda del misterioso Rey Blanco. A lo largo de su travesía, enfrenta obstáculos y desafíos, avanzando siempre hacia el final de su propio camino y su transformación. Enfrenta a la Muerte en un duelo final, descubriendo que el verdadero poder está en aceptar su propio sacrificio o convertirse en...</h5>'
    ],
    'po' => [
        'presentacion'=> '<h3>A história de hoje:</h3>',
        'titulo' => '<h1> O último movimento</h1>',
        'texto' => '<h3>Resumo:</h3><h5> Num tabuleiro de xadrez infinito, um peão embarca na jornada da sua vida para salvar a sua rainha, com a ajuda do misterioso Rei Branco. Ao longo de sua jornada, ele enfrenta obstáculos e desafios, caminhando sempre em direção ao fim de seu próprio caminho e de sua transformação. Ele enfrenta a Morte em um duelo final, descobrindo que o verdadeiro poder está em aceitar seu próprio sacrifício ou em se tornar...</h5>'
    ],
    'en' => [
        'presentacion'=> '<h3>Today we have a new story:</h3>',
        'titulo' => '<h1> The last move</h1>',
        'texto' => '<h3>Summary:</h3><h5> On an infinite chess board, a pawn embarks on the journey of his life to save his queen, with the help of the mysterious White King. Throughout his journey, he faces obstacles and challenges, always moving towards the end of his own path and his transformation. He faces Death in a final duel, discovering that true power lies in accepting his own sacrifice or becoming...</h5>'
    ]
];
// Determinamos el cuento según el idioma seleccionado
$presentacion = $cuentos[$idioma]['presentacion'];
$titulo = $cuentos[$idioma]['titulo'];
$texto = $cuentos[$idioma]['texto'];    
?>
    <div class="dropdown my-5 py-3">
        <button class="btn btn-primary dropbtn mt-5" data-bs-toggle="dropdown">Cambiar idioma </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?idioma=es">Español</a></li>
            <li><a class="dropdown-item" href="?idioma=en">English</a></li>
            <li><a class="dropdown-item" href="?idioma=po">Portugués</a></li>
        </ul>
    </div>
    <div class="col-sm-11 col-md-11 col-lg-11 col-xl-11 bg-primary mx-1 p-3 center" style="color: white; text-align: justify">
        <div class="container text-center my-3 py-3">
            <h1><?php echo $presentacion; echo $titulo; ?></h1>
            <img src="img/imgcuento.jpeg" alt="Imagen de cuento" width="500">
            <p><?php echo $texto; ?></p>
        </div>
    </div>    
<?php require 'plantillas/footer.php'; ?>
