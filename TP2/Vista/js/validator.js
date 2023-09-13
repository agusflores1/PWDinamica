document.addEventListener("DOMContentLoaded", function () {
    const sidebar = document.getElementById("sidebar");
    const sidebarToggle = document.getElementById("sidebarToggle");

    // Agregar un evento al botón para mostrar/ocultar el sidebar
    sidebarToggle.addEventListener("click", function () {
        sidebar.classList.toggle("d-none");
    });
});


$(document).ready(function () {
    // Controlador de eventos 'input' para los campos usuario y clave
    $("#usuario").on("input", function () {
        var fieldValue = $(this).val().trim();
        if (fieldValue === "" ||  /[a-zA-Z]/.test(fieldValue) ||/\d/.test(fieldValue)) {
            $(this).removeClass("is-invalid");
        } else {
            $(this).addClass("is-invalid");
        }
    });

    // Controlador de eventos 'input' para el campo clave
    $("#clave").on("input", function () {
        var claveValue = $(this).val().trim();
        var usuarioValue = $("#usuario").val().trim();

        if (
            claveValue.length < 8 ||
            claveValue === usuarioValue ||
            !/[a-zA-Z]/.test(claveValue) ||
            !/\d/.test(claveValue)
        ) {
            $(this).addClass("is-invalid");
        } else {
            $(this).removeClass("is-invalid");
        }
    });

    // Controlador de envío del formulario
    $("#form").submit(function (e) {
        var claveValue = $("#clave").val().trim();
        var usuarioValue = $("#usuario").val().trim();
        var isValid = true;

        // Validar campo de usuario
        if (usuarioValue === "") {
            $("#usuario").addClass("is-invalid");
            isValid = false;
        } else {
            $("#usuario").removeClass("is-invalid");
        }

        // Validar campo de clave
        if (
            claveValue.length < 8 ||
            claveValue === usuarioValue ||
            !/[a-zA-Z]/.test(claveValue) ||
            !/\d/.test(claveValue)
        ) {
            $("#clave").addClass("is-invalid");
            isValid = false;
        } else {
            $("#clave").removeClass("is-invalid");
        }

        if (!isValid) {
            e.preventDefault(); // Evitar el envío del formulario si hay errores
        }
    });
});


$(document).ready(function () {
    // Controlador de eventos 'input' para el campo anio
    $("#anio").on("input", function () {
        var fieldValue = $(this).val().trim();
        // Expresión regular para validar 4 caracteres numéricos
        var regex = /^\d{4}$/;
        
        if (regex.test(fieldValue) && fieldValue !== "" && fieldValue <= 2023) {
            $(this).removeClass("is-invalid");
        } else {
            $(this).addClass("is-invalid");
        }
    });

    // Controlador de eventos 'input' para el campo duracion
$("#duracion").on("input", function () {
    var fieldValue = $(this).val().trim();
    // Expresión regular para validar hasta tres dígitos
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
    
    $("#genero").on("input", function () {
        var genero = $("#genero").val();
        if (genero !== "") {
            $(this).removeClass("is-invalid");
        } else {
            $(this).addClass("is-invalid");
        }
    });
    
    // Controlador de eventos 'change' para los botones de radio de restricciones
    $("input[name='restricciones']").on("change", function () {
        $("input[name='restricciones']").removeClass("is-invalid");
    });

    // Controlador de envío del formulario
    $("#form1").submit(function (e) {
        var isValid = true;
        $("#titulo,#actores,#director,#guion,#produccion,#anio,#nacionalidad,#duracion,#floatingTextarea2").each(function () {
            var fieldValue = $(this).val().trim();
            if (fieldValue === "") {
                $(this).addClass("is-invalid");
                isValid = false;
            }
        });

        // Verificar el campo "genero"
        var selected = $("#genero").val();
        if (selected === "") {
            $("#genero").addClass("is-invalid");
            isValid = false;
        }

        // Verificar el campo "restricciones"
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
