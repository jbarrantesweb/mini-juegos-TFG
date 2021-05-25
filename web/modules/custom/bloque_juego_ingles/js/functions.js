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

const english_list = ["Bean",
"Bottle",
"Bowl",
"Burger",
"Butter",
"Chopsticks",
"Coffee",
"Cup",
"Egg",
"Flour",
"Hungry",
"Pea",
"Pepper",
"Piece",
"Rice",
"Salad",
"Supper",
"Taste",
"Thirsty",
"Back",
"Beard",
"Curly",
"Moustache",
"Mouth",
"Neck",
"Nose",
"Shoulder",
"Stomach ",
"Cough",
"Earache",
"Fall over",
"Headache",
"Temperature",
"Toothache",
"Bat",
"Bear",
"Butterfly",
"Cage",
"Camel",
"Crocodile",
"Dinosaur",
"Dolphin",
"Duck ",
"Extinct",
"Frog",
"Goat",
"Kangaroo",
"Lizard",
"Puppy",
"Tail",
"Gold",
"Purple",
"Silver ",
"Spot",
"Striped",
"Card",
"Glass",
"Gold",
"Metal",
"Paper",
"Plastic",
"Silver ",
"Wood ",
"Wool ",
"Bag",
"Belt ",
"Glove",
"Handbag",
"Hat ",
"Scarf",
"Tights",
"T-shirt ",
"Umbrella",
"Uniform",
"Aunt",
"Baby ",
"Brother ",
"Cousin ",
"Daughter ",
"Girl ",
"Granddaughter",
"Grandfather ",
"Grandmother ",
"Grandson ",
"Husband ",
"Old ",
"Parent ",
"Wife ",
"Young ",
"Adress ",
"Armchair ",
"Basement ",
"Blanket ",
"Bookcase ",
"Box ",
"Cupboard ",
"Dining room ",
"Downstairs ",
"Fan ",
"Fridge ",
"Garden ",
"Hall ",
"Key ",
"Living room",
"Mirror ",
"Stair ",
"Market ",
"Museum ",
"Place ",
"Playground ",
"Sports centre ",
"Swimming pool ",
"Theatre ",
"Afraid ",
"All ",
"All right",
"Angry ",
"Awake ",
"Bad ",
"Beautiful",
"Big ",
"Blonde ",
"Boring ",
"Brave ",
"Broken ",
"Busy ",
"Careful ",
"Clever",
"Cloudy",
"Dangerous",
"Dark ",
"Dry ",
"Early",
"Easy ",
"Empty ",
"Extinct ",
"Foggy ",
"Heavy ",
"Hot ",
"Lovely ",
"Missing ",
"Naughty ",
"Sunny ",
"Top ",
"Wet",
"Badmington",
"Baseball",
"Basketball",
"Bounce",
"Hobby ",
"Ride ",
"Rucksack",
"Run ",
"Sail",
"Volleyball ",
"Walk",
"Date",
"Day ",
"Early ",
"End ",
"Evening ",
"Every ",
"Late ",
"Midday ",
"Midnight",
"Quarter",
"Sometimes",
"Today",
"Tomorrow",
"Tonight",
"Week",
"Weekend",
"Cloudy",
"Foggy",
"Rain",
"Rainbow",
"Snow ",
"Storm",
"Windy",
"Actor ",
"Astronaut",
"Businessman",
"Clown ",
"Cook ",
"Dentist ",
"Doctor",
"Driver",
"Engineer",
"Farmer",
"Footballer",
"Journalist",
"Mechanis",
"Pilot",
"Policeman",
"Secretary",
"Singer",
"Teacher",
"Waiter ",
"And",
"Or",
"But",
"Because",
"How nice!",
"Not ",
"Never",
"Nobody ",
"Nothing",
"What?",
"Who?",
"Where?",
"When?",
"Why?",
"To do",
"To be",
"To have",
"Can",
"Have got to",
"Half an hour",
"For two days",
"I like",
"I don’t like",
"I hate"];


english = english_list.map(english_list => english_list.toUpperCase());

const spanish_list = ["alubias",
"botella",
"bol",
"hamburguesa",
"mantequilla",
"palillos",
"café",
"taza, copa",
"huevo",
"harina",
"hambriento",
"guisante",
"pimienta",
"pieza",
"arroz",
"ensalada",
"cena",
"sabor",
"sediento",
"espalda",
"barba",
"rizado",
"bigote",
"boca",
"cuello",
"nariz",
"hombro",
"estómago",
"tos",
"dolor de oído",
"tropezar con",
"dolor de cabeza",
"fiebre",
"dolor de muelas",
"murciélago",
"oso",
"mariposa",
"jaula",
"camello",
"cocodrilo",
"dinosaurio",
"delfín",
"pato",
"extinguido",
"rana",
"cabra",
"canguro",
"lagarto",
"cachorro",
"cola",
"oro",
"morado",
"plata",
"lunar, punto",
"rayado",
"cartulina",
"cristal",
"oro",
"metal",
"papel",
"plástico",
"plata",
"madera",
"lana",
"bolsa, bolso",
"cinturón",
"guante",
"bolso de mano",
"sombrero",
"bufanda",
"medias",
"camiseta",
"paraguas",
"uniforme",
"tía",
"bebé",
"hermano",
"primo",
"hermana",
"chica",
"nieta",
"abuelo",
"abuela",
"nieto",
"marido",
"anciano",
"padre/madre",
"esposa",
"joven",
"dirección",
"sillón",
"sótano",
"manta",
"estantería",
"caja",
"armario",
"comedor",
"abajo, planta baja",
"ventilador",
"frigorífico",
"jardín",
"entrada",
"llave",
"sala de estar",
"espejo",
"escalera",
"mercado",
"museo",
"lugar, sitio",
"patio",
"centro deportivo",
"piscina",
"teatro",
"tener miedo",
"todo",
"muy bien",
"enfadado",
"despierto",
"malo",
"bonito",
"grande",
"rubio",
"aburrido",
"valiente",
"roto",
"ocupado",
"cuidadoso",
"inteligente",
"nublado",
"peligroso",
"oscuro",
"seco",
"temprano, pronto",
"fácil",
"vacío",
"extinguido",
"con niebla",
"pesado",
"caliente",
"precioso",
"perdido",
"travieso",
"soleado",
"superior",
"húmedo",
"bádminton",
"beisbol",
"baloncesto",
"botar",
"hobby, pasatiempo",
"montar en",
"mochila",
"correr",
"navegar",
"voleibol",
"andar, caminar",
"fecha",
"día",
"pronto",
"fin",
"tarde-noche",
"cada/todo",
"tarde",
"mediodía",
"medianoche",
"cuarto",
"a veces",
"hoy",
"mañana",
"esta noche",
"semana",
"fin de semana",
"nublado",
"con niebla",
"lluvia",
"arco iris",
"nieve",
"tormenta",
"ventoso",
"actor",
"astronauta",
"hombre de negocios",
"payaso",
"cocinero",
"dentista",
"doctor",
"conductor",
"ingeniero",
"granjero",
"futbolista",
"periodista",
"mecánico",
"piloto",
"policía",
"secretaria",
"cantante",
"profesor",
"camarero",
"y",
"o",
"pero",
"porque",
"¡Qué bonito!",
"no",
"nunca",
"nadie",
"nada",
"¿qué?",
"¿quién?",
"¿dónde?",
"¿cuándo?",
"¿por qué?",
"hacer",
"ser",
"tener",
"poder",
"tener que",
"hora y media",
"por dos días",
"Me gusta",
"No me gusta",
"Odio"];

spanish = spanish_list.map(spanish_list => spanish_list.toUpperCase());