Mario Alejandro Perez Vilchez - Ingeniería Informática - TIM2 - Programación de Aplicaciones Web
________________________________________________________________________________________________
Explicación del funcionamiento:
El funcionamiento se inicia con XAMPP Control Panel, encendiendo el módulo de Apache con la 
intención de utilizar LOCALHOST.
Luego ingresamos la siguiente direccion en el navegador web: http://localhost/tim2/index.php 
(la extracción del zip se debe realizar dentro de la carpeta htdocs de xamp),
donde se encuentra el archivo index.php que contiene la estructura inicial de nuestra web.
Desde aquí utilizaremos en el navegador las funciones solicitadas por los docentes.
Desde el formulario que contiene index.php mediante el method=Post se
envian los datos de acuerdo a los requerimientos solicitados en la evaluación.
------------------------------------------------------------------------------------------------
Pagina Cuento y Fibonacci:
Dentro de la navbar tenemos dos enlaces llamados Cuento y Fibonacci que nos lleva a la página 
Cuento y Fibonacci, donde se encuentran los requerimientos solicitados para cada uno.
Para volver al inicio solo debe presionar la tecla volver atrás del navegador.
------------------------------------------------------------------------------------------------
Discusión:
Solamente por un tema de familiaridad se ha decidido utilizar el lenguaje de programación PHP,
teniendo en cuenta de que cumple con el mismo objetivo de la evaluación que si se utilizara C#,
por lo que no debería interferir en la revisión.
Se deja comentada algunos de los scripts de saludo inicial
------------------------------------------------------------------------------------------------
__________________________________
TIM2 = Trabajo Individual Modulo 2

ADICIONAL: CUENTO EXTENDIDO
<!-- ¿Le gustaría leer un poco más? arrastre el $cuento y genere un código dentro del body <p>?php echo $cuento; ?></p>
$cuento = '<p id="justif">La historia del ajedrez es fascinante y está envuelta en una mezcla de hechos históricos y leyendas. 
    Aquí te presento un relato que distingue entre los elementos de cuento y los hechos históricos.
    Cuento: La Leyenda de la Invención del Ajedrez
    En un antiguo reino de la India, un sabio llamado Sissa ben Dahir fue el encargado de crear un juego que reflejara la complejidad de la guerra. Quería enseñar al rey sobre la estrategia y la importancia 
    de cada uno de sus súbditos. Así, Sissa diseñó un tablero con 64 casillas y 32 piezas que representaban a los soldados, los generales y el rey.
    Cuando el rey jugó por primera vez, quedó maravillado por la profundidad del juego. Para recompensar a Sissa, le ofreció cualquier cosa que deseara. El sabio, con una sonrisa, pidió que se le diera un grano 
    de trigo por la primera casilla del tablero, dos por la segunda, cuatro por la tercera, y así sucesivamente, doblando la cantidad en cada casilla.
    El rey, al principio, pensó que era un deseo modesto. Sin embargo, al darse cuenta de la cantidad de trigo que necesitaba al llegar a la última casilla, se dio cuenta de que era una suma astronómica. 
    Sissa le explicó que el juego era un reflejo de la vida: cada movimiento tenía consecuencias y el crecimiento exponencial de los recursos simbolizaba el poder de la estrategia. El rey comprendió la 
    lección y, desde entonces, el ajedrez se convirtió en un juego para los nobles y guerreros, un símbolo de inteligencia y táctica.### Historia: Orígenes del Ajedrez
    La historia real del ajedrez se remonta al siglo VI en la India, donde se jugaba un juego llamado **Chaturanga**, que se considera el precursor del ajedrez moderno. Chaturanga incluía piezas que representaban infantería, caballería, elefantes y carros, reflejando las fuerzas militares de la época.
    Desde India, el juego se difundió hacia Persia, donde se conoció como **Shah Mat**, que significa "el rey está muerto" en persa. Con la expansión del Islam, el ajedrez llegó a Europa a través de los 
    comerciantes y conquistadores árabes, donde evolucionó en diversas formas. En el siglo XV, el ajedrez adquirió su forma moderna, con las reglas que conocemos hoy.
    A lo largo de los siglos, el ajedrez ha sido un símbolo de inteligencia y estrategia, utilizado no solo como un juego, sino también como una herramienta de enseñanza y reflexión. Su popularidad creció 
    enormemente en Europa durante el Renacimiento, y en el siglo XX se establecieron competiciones formales y campeonatos mundiales.
    ### Conclusión
    Si bien la leyenda de Sissa ben Dahir es un cuento que resalta la importancia del ajedrez como un juego 
    de estrategia, la historia del ajedrez está llena de cambios culturales y adaptaciones a lo largo del 
    tiempo. Si bien no hay una única "verdad" sobre su origen, su evolución es un testimonio de la 
    creatividad humana y la fascinación por el juego. Así que sí, la historia del ajedrez es una mezcla de 
    hechos reales y cuentos que han enriquecido su legado.</p>
    <h3>Título: "El Último Movimiento"<br>
    Resumen:</h3>
    <p>En un tablero de ajedrez infinito, un peón emprende un viaje para desafiar a la Muerte y salvar a su reina, con la ayuda del misterioso Rey Blanco. A lo largo de su travesía, enfrenta obstáculos y desafíos, avanzando siempre hacia el final de su propio camino y su transformación. Enfrenta a la Muerte en un duelo final, descubriendo que el verdadero poder está en aceptar su propio sacrificio.
    <h3>Versión Extendida:</h3>
    <p>En un oscuro tablero de ajedrez, donde las casillas parecían extenderse más allá de lo visible, un peón blanco yacía inmóvil. A simple vista, no destacaba en nada, pero aquel peón, llamado Alba, había presenciado algo que nadie debía haber visto. La Reina Blanca, el alma y símbolo de esperanza de su ejército, había caído en manos de la Muerte, una figura oscura que rondaba entre las piezas, llevándose a los caídos en batalla.
    El Rey Blanco, sabio y anciano, le habló a Alba en secreto. “Tienes una misión, Pequeño,” le susurró. “La Reina aún no ha sido llevada al otro lado. Si encuentras a la Muerte y la desafías, puede que tengas la oportunidad de traerla de vuelta.”
    Aunque el miedo lo carcomía, Alba sabía que debía intentarlo. Así, comenzó su travesía a través del tablero, enfrentando en cada movimiento a piezas enemigas y aliados desconfiados. Pronto, otros peones se interponían en su camino, advirtiéndole que su sacrificio sería en vano. Pero el peón continuó, guiado por un propósito mayor.
    Finalmente, Alba llegó a la última fila del tablero, donde lo esperaba la Muerte, una sombra oscura con un manto que parecía absorber toda luz. Allí, en sus manos, sostenía el alma de la Reina. Alba la desafió, proponiendo una partida en la que, si ganaba, la Reina sería devuelta.
    La Muerte rió, pero aceptó el desafío. Movió sus piezas con precisión y frialdad, cada movimiento calculado para presionar a Alba hacia la derrota. Pero el peón, inspirado por el coraje que nunca supo que poseía, logró coronarse y convertirse en un guerrero nuevo, un Caballero. Sin embargo, para vencer a la Muerte, comprendió que debía hacer un sacrificio final.
    En el último movimiento, Alba sacrificó a su nueva forma, derribando a la Muerte y ### **El Último Jaque Mate**
    **Resumen:**
    En un mundo regido por un inmenso tablero de ajedrez, las piezas cobran vida y juegan sin descanso. La partida es eterna y el equilibrio está a punto de romperse. El rey, cansado y resignado, decide sacrificarse por el bien de su reino, pero un misterioso peón, que ha crecido en poder, se revela como el verdadero héroe de la partida. Con la ayuda de la Muerte, busca cambiar el destino y darle fin a la eterna guerra de piezas, enfrentándose a un plan oculto de Dios que controla los movimientos. 
    **Versión Extendida:**
    Era una noche oscura en el vasto tablero de ajedrez, el cual se extendía más allá de lo que los ojos podían ver. Las piezas, que solo conocían la guerra y la estrategia, se alineaban con precisión absoluta. En el centro de esta guerra perpetua, se encontraba el Rey, una pieza de gran poder pero atrapado en su eterna lucha. Su reino estaba a punto de caer, y él lo sabía. La partida estaba por concluir, pero no de la manera que él deseaba.
    El Rey había comenzado la partida con esperanza, guiado por las piezas más poderosas, las torres, las reinas y los caballos. Sin embargo, a lo largo de los siglos, las batallas se sucedían sin fin, sin victorias definitivas, sin avances. El Rey, agotado y melancólico, había llegado a la conclusión de que el tablero nunca podría salir de ese ciclo. La muerte estaba cerca, pero él no quería rendirse.
    — ¿Qué sentido tiene seguir? — pensó, mientras observaba a la Reina, quien, con su poder infinito, dominaba las partidas desde las sombras. La Reina, arrogante y fría, siempre imponía su voluntad, pero algo la perturbaba. Ella sabía que la guerra no debía continuar, que algo estaba manipulando los hilos del tablero, como si hubiera una mano invisible.
    Entonces, en un rincón olvidado del tablero, un Peón comenzó a avanzar más allá de lo que le era permitido. A lo largo de las partidas, había permanecido en silencio, una pieza sacrificable, ignorada por todos, pero esta vez, algo había cambiado. Este Peón había logrado descubrir un secreto que ni las torres, ni la Reina, ni el propio Rey conocían: el tablero era solo un reflejo de algo mucho más grande. El verdadero enemigo no eran las piezas, sino un ser oculto detrás de ellas. 
    Mientras el Peón avanzaba, sintió una presencia que le heló la sangre: **la Muerte**. La figura esquelética apareció ante él, no como un enemigo, sino como una aliada. 
    — ¿Qué deseas, Peón? — le preguntó la Muerte, con su voz profunda y retumbante.
    — Quiero acabar con la partida — respondió él. — Estoy cansado de la guerra. Si muero, quiero saber que lo hago por algo más grande. 
    La Muerte lo miró fijamente, evaluando sus palabras. De pronto, un susurro desde las sombras se hizo escuchar: **Dios**. Él era la fuerza que mantenía la partida en marcha, un ser invisible que movía las piezas con su voluntad eterna.
    — Peón, no puedes detener la partida. Yo soy el que la dirige. Si te enfrentas a mí, no habrá salvación para ti ni para nadie. — La voz de Dios resonó como un trueno.
    Pero el Peón, movido por un poder que aún no comprendía, levantó su mirada desafiante.
    — ¿Acaso no has visto la desesperación del Rey? — preguntó. — La guerra ya no tiene sentido. La eternidad en este tablero es solo una ilusión creada por ti.
    La Muerte intervino, tomando la mano del Peón. Su toque era frío y su voz, suave.
    — La muerte no es el final, pero sí el principio de algo nuevo. La partida ha sido un ciclo, pero tú, Peón, eres el que puede romperlo. Si tienes el coraje, puedes desafiar a Dios mismo.
    El Peón, sintiendo una fuerza que nunca imaginó tener, avanzó hasta llegar al lugar donde el Rey y la Reina se encontraban, listos para dar el último golpe. En ese momento, el tablero tembló. Los demás jugadores, en sus posiciones, sintieron que algo estaba a punto de cambiar.
    Con una jugada final, el Peón se colocó frente al Rey, y sin que nadie lo esperara, **le dio jaque mate a Dios**. La mano invisible que movía las piezas se desvaneció, y el eterno ciclo del tablero se detuvo.
    La Muerte sonrió. El Peón, ahora un rey en su propio derecho, miró a la Reina. No era necesario seguir luchando. Todo había terminado.
    El tablero, antes inmenso e infinito, comenzó a desmoronarse, dejando atrás solo la quietud. La guerra se había acabado. El Peón, convertido en el nuevo protector del equilibrio, entendió que a veces, para cambiar el destino, solo se necesita un movimiento inesperado.
    **Fin.** 
    </p>'; -->

