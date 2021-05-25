
var english;
var spanish;

//codigo sin modificar juego
var datos_ultima_partida;
var barra;
var tablero;
var puntos; //div que contine el marcador
var puntuacion; //puntuacion numérica
var hilo;
var correcto;
var incorrecto;
var continuar = true; //boolean para controlar el juego
var tiempo; //tiene que disminuir para ser más rapido y complicar el juego de 50 para abajo
var boton_play_repeat;
var status;

//document ready
docReady(function () {

  //para el tema bartik por defecto.
  //var container = document.querySelector("#block-bloque-juego-mates .content");


  //para el tema custom bootstrap 3
  //var container = document.querySelector("#block-bloque-juego-mates-2 .content");
  //container.id = "tablero";

  barra = document.getElementById("miBarra");
  puntos = document.getElementById("puntos");
  tablero = document.getElementById("contenido_tablero");
  correcto = document.getElementById("correcto");
  incorrecto = document.getElementById("incorrecto");
  boton_play_repeat = document.getElementById("play_repeat");
  //status = document.getElementById("status");

  document.getElementById("status").style.display = "none";

  tablero.innerHTML += "Repaso de Inglés <br />Pulsa <span id='jugar1' class='clickable rojo'>PLAY</span> <br /> para jugar";
  document.getElementById("jugar1").addEventListener("click", jugar);
  document.getElementById("play").addEventListener("click", jugar);

  //document.getElementById("botones").style.display = "none";
  document.getElementById('marcador').style.display = "none";



  //iniciamos una partida (que tiene varias rondas)
  function jugar() {

    quitarClasesTablero();
    var contenido_tablero = document.getElementById('contenido_tablero');
    contenido_tablero.classList.add('tablero_ingame');
    //$("#contenido_tablero").addClass("tablero_ingame");

    ocultar_play();

    var botones = document.getElementById('botones');
    var marcador = document.getElementById('marcador');
    var status = document.getElementById('status');


    //botones.style.display = "block";
    marcador.style.display = "block";
    status.style.display = "block";


    continuar = true;
    //document.getElementById("header").style.marginBottom = "1%";
    //document.getElementById("correcto").style.display = "block";
    //document.getElementById("incorrecto").style.display = "block";

    puntuacion = 0; //inicializamos la variable a 0 puntos
    puntos.innerText = "Puntos " + puntuacion; //puntuación a cero
    tiempo = 70; //tiene que disminuir para ser más rapido y complicar el juego
    //tiempo 50 parece bien
    //console.log(tiempo);
    ronda();

  }//jugar

  //cada ronda del juego
  function ronda() {


    var random = Math.floor(Math.random() * 221); // numero random para el array

    console.log(english[random]);
    console.log(spanish[random]);


    let word1_correcta = mostrarCorrecto();//mostramos el resultado correcto o no aprox 50%
    //console.log(tiempo);

    //calculo de números random y resultados
    let palabra1 = english[random];
    let word1 = spanish[random];
    let word2 = spanish[Math.floor(Math.random() * 221)];  //cuidado al borrar palabras

    let resultado = word1;
    let resultadoMal = word2;
    //console.log(mostrarCorrecto());
    //console.log(resultado);

    if (word1_correcta) {//es correcta la primera palabra
      borrarListener();
      tablero.innerHTML = "<span id='centrado'>" + palabra1 + " =</span> <br /> ";
      tablero.innerHTML += " <span id='correcto' class='seleccionado'> A) " + word1 + "</span> <br /> "
      tablero.innerHTML += " <span id='incorrecto' class='seleccionado'> B) " + word2 + " </span> ";
      document.getElementById("incorrecto").addEventListener("click", fallo);
      document.getElementById("correcto").addEventListener("click", acierto);



    } else { //es correcta la segunda
      borrarListener();
      tablero.innerHTML = "<span id='centrado'>" + palabra1 + " =</span> <br /> ";
      tablero.innerHTML += " <span id='incorrecto' class='seleccionado'> A) " + word2 + "</span> <br /> "
      tablero.innerHTML += " <span id='correcto' class='seleccionado'> B) " + word1 + " </span> ";
      document.getElementById("incorrecto").addEventListener("click", fallo);
      document.getElementById("correcto").addEventListener("click", acierto);

    }
    mover(tiempo);
  }//fin ronda

  //quitamos los eventListener
  function borrarListener() {
    correcto.removeEventListener("click", acierto);
    correcto.removeEventListener("click", fallo);
    incorrecto.removeEventListener("click", acierto);
    incorrecto.removeEventListener("click", fallo);
  }

  //cuando acertamos
  function acierto() {
    document.getElementById("correcto").classList.remove('option');
    //console.log("acierto");
    contenido_tablero.classList.add('acertada');
    puntos.classList.add('acertada');
    setTimeout(() => {
      contenido_tablero.classList.remove('acertada');
      puntos.classList.remove('acertada');
    }, 500);

    sumaPunto();
    tiempo -= 1;
    parar();
    if (continuar) ronda();
    else gameOver();
  }

  //cuando fallamos o la barra llega al final
  function fallo() {
    console.log("fallo");
    contenido_tablero.classList.add('fallada');
    puntos.classList.add('fallada');

    setTimeout(() => {
      contenido_tablero.classList.remove('fallada');
      puntos.classList.remove('fallada');
    }, 500);

    parar();
    tiempo -= 15;
    if (continuar) ronda();
    else gameOver();
  }

  //suma un punto por acertar y modifica la puntiación
  function sumaPunto() {
    puntuacion++;
    puntos.innerHTML = "Puntos " + puntuacion;
  }

  //mueve la barra en función del tiempo pasado por parameto
  function mover(tiempo) {
    barra.style.backgroundColor = "#4CAF50";
    let width = 1;
    hilo = setInterval(frame, tiempo);

    function frame() {
      if (width >= 100) { //cuando la barra termina
        clearInterval(hilo);
        barra.style.backgroundColor = "#af4c4c";
        gameOver();
      }
      else {
        width += 2;
        barra.style.width = width + '%';
      }
    }

  }

  //cuando finaliza la partida
  function gameOver() {
    //document.getElementById("botones").style.display = "none";
    document.getElementById('marcador').style.display = "none";
    //$("#marcador").hide();

    continuar = false;
    quitarClasesTablero();
    //document.getElementById('contenido_tablero').classList.add('tablero_gameOver');
    //$("#contenido_tablero").addClass("tablero_gameOver");
    tablero.innerHTML = "Game Over <br /> ";
    tablero.innerHTML += "Puntos: " + puntuacion + "<br />";
    tablero.innerHTML += "<span id='jugar2' class='clickable rojo'>Jugar de nuevo??</span>";
    document.getElementById("jugar2").addEventListener("click", jugar);
    mostrar_play();
    cambiarReplay();//cambiar play por repeat

    //tomar datos despues de la partida
    /*
     datos_ultima_partida = {
       "usuario": usuario.innerHTML,
       "puntuacion": puntuacion
     };
   */

    /* NO HAY JSON
    if (usuario.innerHTML != 'Usuario no registrado'){
      modificaJSON(); 
    }
    */
  }

  //detiene la barra
  function parar() {
    clearInterval(hilo);
    barra.style.width = "100%";
    barra.style.backgroundColor = "#af4c4c";
  }

  //devuelve aleatoriamente true o false
  function mostrarCorrecto() {
    if (Math.round(Math.random()) === 0) {
      return true;
    } else {
      return false;
    }
  }

}); //FUNCION GLOBAL



