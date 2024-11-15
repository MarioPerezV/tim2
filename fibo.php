<!DOCTYPE html>
<html lang="es">
<head>
<?php require 'plantillas/head.php'; ?>
</head>
<body>
<header>
<?php require 'plantillas/navbar.php'; ?>
</header>
    <div class="col-sm-11 col-md-11 col-lg-11 col-xl-11 bg-primary my-5 py-3 center" style="color: white; text-align: justify">
        <div class="container text-center my-5 d-flex flex-column align-items-center">
            <h1>Serie de Fibonacci</h1>
            <h6>Ingrese hasta qué número de la serie desea ver (1-99):</h6>
            <input class="form-control col-2 bg-light my-2" type="number" id="numero" min="1" max="99" placeholder="Número" required>
            <button class="btn btn-info" onclick="mostrarSerieFibonacci()">Mostrar Serie</button>
            <div id="fibonacciSequence" class="fibonacci-sequence">
            <script src="scripts.js"></script>
<!-- Se tuvo que borrar el codigo fibonacci en php porque no lo podía comentar, me quedo con el script porque 
 tiene una mejor visualización o como se dice ahora: una mejor experiencia de usuario -->
            </div>
        </div>
    </div>
<?php require 'plantillas/footer.php'; ?>
