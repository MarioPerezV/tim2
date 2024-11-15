/* JavaScript es un lenguaje nuevo para mí, tuve muchas redundancias de código como se puede observar 
en el archivo HTML, el cuál se comentó, pero no se borró como recordatorio del aprendizaje*/
// Se deja comentado el Mensaje emergente al inicio de bienvenida, demasiado redundante para corregir 
// errores y me imagino que para el evaluador también
alert("Bienvenid@ al Club")
// Solicitar el nombre de usuario y mostrar el saludo en la ventana emergente
//let nombreUsuario=prompt("¿Cuál es su nombre?");
//alert("Hola, " + nombreUsuario + " esperamos que tengas una linda experiencia")
//-------------------------------------------------------------------------------
// A continuación se cambia la ubicación del script que antes estaba en el body
function mostrarSerieFibonacci() {
    const input = document.getElementById('numero');
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