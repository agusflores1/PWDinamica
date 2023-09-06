
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

    // Controladores de eventos 'input' para otros campos
    $("#titulo,#actores,#director,#guion,#produccion,#nacionalidad,#floatingTextarea2").on("input", function () {
        var fieldValue = $(this).val().trim();
        if (fieldValue !== "") {
            $(this).removeClass("is-invalid");
        }
    });
    
    // Controlador de eventos 'change' para el campo 'genero'
    $("#genero").on("change", function () {
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
    $("#formCine").submit(function (e) {
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

/*
$(document).ready(function() {
    // Agrega un controlador de eventos al formulario para el evento de envío
    $("#formCine").submit(function(event) {
        var archivoInput = $("#archivo");

        // Verifica si se ha seleccionado un archivo
        if (archivoInput[0].files.length === 0) {
            // Si no se seleccionó un archivo, muestra un mensaje de error
            $("archivo").addClass("is-invalid");
            alert("Por favor, debe ingresar un archivo.");
            event.preventDefault(); // Evita el envío del formulario
        }
    });
}); */

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
