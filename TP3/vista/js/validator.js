document.addEventListener("DOMContentLoaded", function () {
    const sidebar = document.getElementById("sidebar");
    const sidebarToggle = document.getElementById("sidebarToggle");

    // Agregar un evento al botón para mostrar/ocultar el sidebar
    sidebarToggle.addEventListener("click", function () {
        sidebar.classList.toggle("d-none");
    });
});

$(document).ready(function () {
    $("#anio").on("input", function () {
        var fieldValue = $(this).val().trim();
        var regex = /^\d{4}$/;
        if (regex.test(fieldValue) && fieldValue !== "" && fieldValue <= 2023) {
            $(this).removeClass("is-invalid");
        } else {
            $(this).addClass("is-invalid");
        }
    });

    
    $("#duracion").on("input", function () {
        var fieldValue = $(this).val().trim();
        var regex = /^\d{1,3}$/; // Permite de 1 a 3 dígitos

        if (regex.test(fieldValue) && fieldValue !== "") {
            $(this).removeClass("is-invalid");
        } else {
            $(this).addClass("is-invalid");
        }
    });

    
    $("#titulo,#actores,#director,#guion,#produccion,#nacionalidad,#floatingTextarea2").on("input", function () {
        var fieldValue = $(this).val().trim();
        if (fieldValue !== "") {
            $(this).removeClass("is-invalid");
        }
    });
    
    $("#genero").on("change", function () {
        var genero = $("#genero").val();
        if (genero !== "") {
            $(this).removeClass("is-invalid");
        } else {
            $(this).addClass("is-invalid");
        }
    });

    $("input[name='restricciones']").on("change", function () {
        $("input[name='restricciones']").removeClass("is-invalid");
    });

    $("#formCine").submit(function (e) {
        var isValid = true;
        $("#titulo,#actores,#director,#guion,#produccion,#anio,#nacionalidad,#duracion,#floatingTextarea2").each(function () {
            var fieldValue = $(this).val().trim();
            if (fieldValue === "") {
                $(this).addClass("is-invalid");
                isValid = false;
            }
        });

        var selected = $("#genero").val();
        if (selected === "") {
            $("#genero").addClass("is-invalid");
            isValid = false;
        }

        var restriccionEdad = $("input[name='restricciones']:checked").val();
        if (restriccionEdad === undefined) {
            $("input[name='restricciones']").addClass("is-invalid");
            isValid = false;
        }
        
        if (!isValid) {
            e.preventDefault(); // Evitar el envío del formulario si hay errores
        }
    });
});


$(document).ready(function() {
    // Agrega un controlador de eventos al formulario para el evento de envío
    $("#formCine").submit(function(event) {
        var archivoInput = $("#archivo");

        // Verifica si se ha seleccionado un archivo
        if (archivoInput[0].files.length === 0) {
            // Si no se seleccionó un archivo, muestra un mensaje de error
            archivoInput.addClass("is-invalid"); 
            event.preventDefault(); // Evita el envío del formulario
        }
    });
});

function validarArchivo() {
    var archivoInput = $("#archivo");
    alert("entra");

    // Verifica si se ha seleccionado un archivo
    if (archivoInput[0].files.length === 0) {
        // Si no se seleccionó un archivo, muestra un mensaje de error
        archivoInput.addClass("is-invalid");
        return false; // Evita el envío del formulario
    }
    return true; // Permite el envío del formulario si se selecciona un archivo
}