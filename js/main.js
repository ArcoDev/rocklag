if (window.matchMedia("(min-width: 1024px)").matches) {
    //alert("Hoal desde js");
    /* Animacio del navbar  */
    const nav = document.getElementById("nav");
    const contenido = document.getElementById("contenido");
    const menMov = document.getElementById("menMov");
    const enlaces = document.getElementById("enlaces");
    const error = document.getElementById("error");
    // Detectamos cuando el usuario desplace la pantalla
    window.onscroll = function() {
        posicionScroll();
    };

    function posicionScroll() {
        if (document.body.scrollTop > 1 || document.documentElement.scrollTop > 1) {
            nav.style.background = "#000";
            nav.style.transition = "all .5s ease-in";
            nav.style.width = "100%";
            nav.style.position = "fixed";
            nav.style.marginTop = "-20px";
            enlaces.style.marginTop = "20px";
        } else if (
            document.body.scrollTop < 1 ||
            document.documentElement.scrollTop < 1
        ) {
            nav.style.background = "transparent";
            nav.style.transition = "all .8s ease-in";
            nav.style.marginTop = "0";
            nav.style.transition = "all .3s ease-in";
            enlaces.style.marginTop = "40px";
        }
    }
}
/* Validacion de formulario */
function validar() {
    var nombre, apellido, email, asunto, mensaje, expresionEmail, error, txtError;
    nombre = document.getElementById("nombre").value;
    apellido = document.getElementById("apellido").value;
    email = document.getElementById("email").value;
    asunto = document.getElementById("asunto").value;
    mensaje = document.getElementById("mensaje").value;
    error = document.getElementById("error");
    txtError = document.getElementById("txtError");
    expresionEmail = /\w+@\w+\.+[a-z]/;

    if (nombre === "" || apellido === "" || email === "" || asunto === "" || mensaje === "") {
        error.style.opacity = "1";
        txtError.innerHTML = "Todos los campos son obligatorios";
        setTimeout(function() {
            error.style.opacity = "0";
        }, 5000);
        return false;
    } else if (nombre.length > 20) {
        error.style.opacity = "1";
        txtError.innerHTML = "Nombre demasiado largo";
        setTimeout(function() {
            error.style.opacity = "0";
        }, 5000);
        return false;
    } else if (apellido.length > 20) {
        error.style.opacity = "1";
        txtError.innerHTML = "Apellido demasiado largo";
        setTimeout(function() {
            error.style.opacity = "0";
        }, 5000);
        return false;
    } else if (!expresionEmail.test(email)) {
        error.style.opacity = "1";
        txtError.innerHTML = "El email es invalido";
        setTimeout(function() {
            error.style.opacity = "0";
        }, 5000);
        return false;
    } else if (asunto.length > 30) {
        error.style.opacity = "1";
        txtError.innerHTML = "El asunto es demasiado largo";
        setTimeout(function() {
            error.style.opacity = "0";
        }, 5000);
        return false;
    } else if (mensaje.length > 50) {
        error.style.opacity = "1";
        txtError.innerHTML = "EL mensaje es demasiado largo";
        setTimeout(function() {
            error.style.opacity = "0";
        }, 5000);
        return false;
    } else {
        txtError.innerHTML = "";
    }
}

/* Animacion para el menu en movil */
addEventListener("DOMContentLoaded", () => {
    const menMov = document.getElementById("menMov");
    if (menMov) {
        menMov.addEventListener("click", () => {
            const link = document.getElementById("enlaces");
            link.classList.toggle("show");
        });
    }
});

function remover() {
    const link = document.getElementById("enlaces");
    link.classList.remove("show")
}