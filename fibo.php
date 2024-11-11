<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/ecoma.ico" />
    <title>Fibonacci</title>
    <link rel="stylesheet" href="estilos.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="col-sm-11 col-md-11 col-lg-11 col-xl-11 bg-primary m-3 p-3 center" style="color: white; text-align: justify">
        <div class="container text-center my-3 py-3 d-flex flex-column align-items-center">
            <h1>Serie de Fibonacci</h1>
            <h6>Ingrese hasta qué número de la serie desea ver (1-99):</h6>
            <input class="form-control col-2 bg-light m-2" type="number" id="numberInput" min="1" max="99" placeholder="Número" required>
            <button class="btn btn-info" onclick="mostrarSerieFibonacci()">Mostrar Serie</button>
            <div id="fibonacciSequence" class="fibonacci-sequence">
                <script>
                    function mostrarSerieFibonacci() {
                        const input = document.getElementById('numberInput');
                        const n = parseInt(input.value);

                        if (isNaN(n) || n < 1 || n > 99) {
                            alert('Por favor, ingrese un número entre 1 y 99.');
                            return;
                        }
                        let outputDiv = document.getElementById('fibonacciSequence');
                        outputDiv.innerHTML = '';

                        // Variables para los dos primeros números de la serie
                        let a = 0, b = 1, iteracion = 1;

                        while (iteracion <= n) {
                            // Muestra el número de la serie
                            const p = document.createElement('p');
                            p.textContent = `Iteración ${iteracion}: ${a}`;
                            outputDiv.appendChild(p);

                            // Calcula el siguiente número en la secuencia
                            let siguiente = a + b;
                            a = b;
                            b = siguiente;
                            iteracion++;
                        }
                    }
                </script>
            </div>
        </div>
    </div>
</body>
</html>
