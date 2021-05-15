//document ready
function docReady(fn) {
    // see if DOM is already available
    if (document.readyState === "complete" || document.readyState === "interactive") {
        // call on next available tick
        setTimeout(fn, 1);
    } else {
        document.addEventListener("DOMContentLoaded", fn);
    }
}

//hacer una funcion para quitar todas las clases de tablero
function quitarClasesTablero() {
    var contenido_tablero = document.getElementById('contenido_tablero');
    contenido_tablero.classList.remove('tablero_ingame');
    //contenido_tablero.classList.remove('tablero_gameOver');
    //contenido_tablero.classList.remove('tablero_ranking');
    //contenido_tablero.classList.remove('formulario_inicial');

    /*
    $("#contenido_tablero").removeClass("tablero_ingame");
    $("#contenido_tablero").removeClass("tablero_gameOver");
    $("#contenido_tablero").removeClass("tablero_ranking");
    $("#contenido_tablero").removeClass("formulario_inicial");
    */
}

function ocultar_play() {
    var boton_play_repeat = document.getElementById("play_repeat");
    boton_play_repeat.style.display = "none";
}

function mostrar_play() {
    var boton_play_repeat = document.getElementById("play_repeat");
    boton_play_repeat.style.display = "block";
}

function cambiarReplay() {
    var play = document.getElementById('play');
    play.classList.remove('sprite-play', 'sprite-play1');
    play.classList.add('sprite-replay', 'sprite-replay1');

    //$("#play").removeClass("sprite-play sprite-play1");
    //$("#play").addClass("sprite-replay sprite-replay1");
}


/*
//para usar jquery dentro de drupal
(function($, Drupal) {
    Drupal.behaviors.bloque_juego = {
        attach: function attach(context) {
            $(document).ready(function () {
                console.log("ready!");
            });
        }
    };
}) (jQuery, Drupal);

*/