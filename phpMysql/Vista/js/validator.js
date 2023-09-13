
document.addEventListener("DOMContentLoaded", function () {
    const sidebar = document.getElementById("sidebar");
    const sidebarToggle = document.getElementById("sidebarToggle");

    // Agregar un evento al botón para mostrar/ocultar el sidebar
    sidebarToggle.addEventListener("click", function () {
        sidebar.classList.toggle("d-none");
    });
});


function validarFormulario() {
    var patenteInput = document.getElementById("patente");
    var patente = patenteInput.value.trim();

    if (patente === "") {
        // Mostrar error si la patente está vacía
        patenteInput.classList.add("is-invalid");
        return false; // Evitar el envío del formulario
    } else {
        
        patenteInput.classList.remove("is-invalid");
        return true; // Envía el formulario
    }
}


function validarDni() {
    var dniInput = document.getElementById("DNI");
    var dniValue = dniInput.value.trim();

    if (dniValue === "" || isNaN(dniValue) || dniValue.length != 8) {
        dniInput.classList.add("is-invalid");
        return false;
    } else {
        dniInput.classList.remove("is-invalid");
        return true;
    }
}



//Jquery

$(document).ready(function () {
    $("#form6").submit(function (e) {
        var isValid = true;
        $("#nombre, #apellido, #DNI, #telefono, #fechaNac, #domicilio").each(function () {
            var fieldValue = $(this).val().trim();
            var fieldId = $(this).attr("id");

            if (fieldValue === "") {
                $(this).addClass("is-invalid");
                isValid = false;
            } else {
                $(this).removeClass("is-invalid");

                // Valida campos específicos.
                if ((fieldId === "nombre" || fieldId === "apellido") && !/^[A-Za-z\s]+$/.test(fieldValue)) {
                    $(this).addClass("is-invalid");
                    isValid = false;
                }
                if ((fieldId === "DNI" || fieldId === "telefono") && !/^[0-9]+$/.test(fieldValue)) {
                    $(this).addClass("is-invalid");
                    isValid = false;
                }
                if (fieldId === "fechaNac") {
                    // Validar la fecha de nacimiento
                    var fechaNacDate = new Date(fieldValue);
                    var fechaActual = new Date();

                    if (isNaN(fechaNacDate) || fechaNacDate >= fechaActual) {
                        $(this).addClass("is-invalid");
                        isValid = false;
                    }
                }
            }
        });

        if (!isValid) {
            e.preventDefault(); // Evitar el envío del formulario si hay errores
        }
    });
});

//valida auto nuevo
/*
document.addEventListener("DOMContentLoaded", function () {
    form.addEventListener("submit", function (e) {
        var isValid = true;
        var patente = form.getElementById("patente");
        var marca = form.getElementById("marca");
        var modelo = form.getElementById("modelo");
        var dni = form.getElementById("DNI");

        if (patente.value.trim() === "") {
            patente.classList.add("is-invalid");
            isValid = false;
        } else {
            patente.classList.remove("is-invalid");
        }

        if (marca.value.trim() === "") {
            marca.classList.add("is-invalid");
            isValid = false;
        } else {
            marca.classList.remove("is-invalid");
        }

        if (modelo.value.trim() === "" || !/^[0-9]+$/.test(modelo.value.trim()))  {
            modelo.classList.add("is-invalid");
            isValid = false;
        } else {
            modelo.classList.remove("is-invalid");
        }

        if (dni.value.trim() === "" || !/^[0-9]+$/.test(dni.value.trim())) {
            dni.classList.add("is-invalid");
            isValid = false;
        } else {
            dni.classList.remove("is-invalid");
        }

        if (!isValid) {
            e.preventDefault(); // Evitar el envío del formulario si hay errores
        }
    });
});
*/
function validarAuto() {
    var isValid = true;
    var patente = document.getElementById("patente");
    var marca = document.getElementById("marca");
    var modelo = document.getElementById("modelo");
    var dni = document.getElementById("DNI");

    if (patente.value.trim() === "") {
        patente.classList.add("is-invalid");
        isValid = false;
    } else {
        patente.classList.remove("is-invalid");
    }

    if (marca.value.trim() === "") {
        marca.classList.add("is-invalid");
        isValid = false;
    } else {
        marca.classList.remove("is-invalid");
    }

    if (modelo.value.trim() === "" || !/^[0-9]+$/.test(modelo.value.trim())) {
        modelo.classList.add("is-invalid");
        isValid = false;
    } else {
        modelo.classList.remove("is-invalid");
    }

    if (dni.value.trim() === "" || !/^[0-9]+$/.test(dni.value.trim())) {
        dni.classList.add("is-invalid");
        isValid = false;
    } else {
        dni.classList.remove("is-invalid");
    }

    return isValid;
}



    function validarCambioDuenio() {
        const patenteInput = document.getElementById("patente");
        const dniInput = document.getElementById("DNI");

        // Verifica que la patente tenga exactamente 7 caracteres
        if (patenteInput.value.length !== 7) {
            patenteInput.classList.add("is-invalid");
            return false;
        } else {
            patenteInput.classList.remove("is-invalid");
        }

        // Verifica que el DNI tenga exactamente 8 caracteres
        if (dniInput.value.length !== 8) {
            dniInput.classList.add("is-invalid");
            return false;
        } else {
            dniInput.classList.remove("is-invalid");
        }

        // Si todos los campos son válidos, puedes enviar el formulario
        return true;
    }


    function validarActualizacion() {
        var isValid = true;
        const nombre = document.getElementById("nombre");
        const apellido = document.getElementById("apellido");
        const fechaNac = document.getElementById("fechaNac");
        const telefono = document.getElementById("telefono");
        const domicilio = document.getElementById("domicilio");
        if (nombre.value.trim() === "" || !/^[A-Za-z\s]+$/.test(nombre.value.trim())) {
            nombre.classList.add("is-invalid");
            isValid = false;
        } else {
            nombre.classList.remove("is-invalid");
        }
    
        if (apellido.value.trim() === "" || !/^[A-Za-z\s]+$/.test(apellido.value.trim())) {
            apellido.classList.add("is-invalid");
            isValid = false;
        } else {
            apellido.classList.remove("is-invalid");
        }
    
        if (telefono.value.trim() === "" || !/^[0-9]+$/.test(telefono.value.trim())) {
            telefono.classList.add("is-invalid"); // Corrección aquí
            isValid = false;
        } else {
            telefono.classList.remove("is-invalid"); // Corrección aquí
        }
        if (domicilio.value.trim() === "") {
            domicilio.classList.add("is-invalid");
            isValid = false;
        } else {
            nombre.classList.remove("is-invalid");
        }
        if (fechaNac.value.trim() === "") {
            fechaNac.classList.add("is-invalid");
            isValid = false;
        } else {
            fechaNac.classList.remove("is-invalid");
            var fechaNacDate = new Date(fechaNac.value.trim());
            var fechaActual = new Date();
    
            if (isNaN(fechaNacDate) || fechaNacDate >= fechaActual) {
                fechaNac.classList.add("is-invalid");
                isValid = false;
            } else {
                fechaNac.classList.remove("is-invalid");
            }
        }
    
        return isValid;
    }
    