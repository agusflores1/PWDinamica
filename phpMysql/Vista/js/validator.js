//EJ1
$(document).ready(function () {
    var numeroInput = $("#numero");
    numeroInput.on("input", function () {
        var inputValue = numeroInput.val().trim();
         if (isNaN(inputValue)) {
            numeroInput.addClass("is-invalid");
        } else {
            numeroInput.removeClass("is-invalid");
        }
    });

    $("#form1").submit(function (e) {
        var inputValue = numeroInput.val().trim();
        if (inputValue === "" || isNaN(inputValue)) {
            numeroInput.addClass("is-invalid");
            e.preventDefault();
        }
    });
});

//EJ2
$(document).ready(function () {
    // Agrega un controlador de eventos 'input' a los campos de lunes a viernes
    $("#lunes_form, #martes_form, #miercoles_form, #jueves_form, #viernes_form").on("input", function () {
        var inputValue = $(this).val().trim();
        if (isNaN(inputValue)) {
            $(this).addClass("is-invalid");
        } else {
            $(this).removeClass("is-invalid");
        }
    });

    // Agregar evento submit al formulario
    $("#form").submit(function (e) {
        // Verificar cada campo de entrada
        var isValid = true;
        $("#lunes_form, #martes_form, #miercoles_form, #jueves_form, #viernes_form").each(function () {
            var inputValue = $(this).val().trim();
            if (inputValue === "" || isNaN(inputValue)) {
                $(this).addClass("is-invalid");
                isValid = false;
            } else {
                $(this).removeClass("is-invalid"); // Asegúrate de quitar la clase en caso de que se haya agregado antes
            }
        });

        // Evitar que el formulario se envíe si hay errores
        if (!isValid) {
            e.preventDefault();
        }
    });
});

//PT3
$(document).ready(function () {
    // Declarar isValid como una variable global
    var isValid = true;

    // Controlador de eventos 'input' para los campos de nombre y apellido
    $("#nombre, #apellido").on("input", function () {
        var fieldValue = $(this).val().trim();
        if (/^[a-zA-Z\s]+$/.test(fieldValue) || fieldValue === "") {
            $(this).removeClass("is-invalid");
        } else {
            $(this).addClass("is-invalid");
            isValid = false;
        }
    });

    // Validar la edad como un número entero mayor que 0 en tiempo real
    $("#edad").on("input", function () {
        var fieldValue = $(this).val().trim();
        if (/^[1-9]\d*$/.test(fieldValue) || fieldValue === "") {
            $(this).removeClass("is-invalid");
        } else {
            $(this).addClass("is-invalid");
            isValid = false;
        }
    });

    // Controlador de eventos 'input' para el campo de dirección
    $("#direccion").on("input", function () {
        var fieldValue = $(this).val().trim();
        if (fieldValue === "") {
            $(this).addClass("is-invalid");
            isValid = false;
        } else {
            $(this).removeClass("is-invalid");
        }
    });
    
     
   // Controlador de envío del formulario
$("#form3").submit(function (e) {
    // Restablecer isValid a true al comienzo del controlador de envío
    var isValid = true;

    // Validar el campo de nombre
    var nombreFieldValue = $("#nombre").val().trim();
    if (!/^[a-zA-Z\s]+$/.test(nombreFieldValue)) {
        $("#nombre").addClass("is-invalid");
        isValid = false;
    } else {
        $("#nombre").removeClass("is-invalid");
    }

    // Validar el campo de apellido
    var apellidoFieldValue = $("#apellido").val().trim();
    if (!/^[a-zA-Z\s]+$/.test(apellidoFieldValue)) {
        $("#apellido").addClass("is-invalid");
        isValid = false;
    } else {
        $("#apellido").removeClass("is-invalid");
    }

    // Validar la edad como un número entero mayor que 0
    var edadFieldValue = $("#edad").val().trim();
    if (!/^[1-9]\d*$/.test(edadFieldValue)) {
        $("#edad").addClass("is-invalid");
        isValid = false;
    } else {
        $("#edad").removeClass("is-invalid");
    }

    // Verificar que los campos no estén vacíos
    $("#nombre, #apellido, #edad, #direccion").each(function () {
        var fieldValue = $(this).val().trim();
        if (fieldValue === "") {
            $(this).addClass("is-invalid");
            isValid = false;
        }
    });

    if (!isValid) {
        e.preventDefault(); // Evitar el envío del formulario si hay errores
    }
});})

//PT5
 $(document).ready(function () {
    // Controlador de eventos 'input' para el campo de sexo
    $("#sexo").on("input", function () {
        var selectedSexo = $("#sexo").val();
        if (selectedSexo === "Masculino" || selectedSexo === "Femenino") {
            $(this).removeClass("is-invalid");
        } else {
            $(this).addClass("is-invalid");
            isValid = false;
        }
    });
     
    // Controlador de eventos 'change' para los botones de radio de nivel de estudio
    $("input[name='nivelEstudio']").on("change", function () {
        $("input[name='nivelEstudio']").removeClass("is-invalid");
    });

    // Controlador de envío del formulario
    $("#form5").submit(function (e) {
    // Restablecer isValid a true al comienzo del controlador de envío
    var isValid = true;

    // Validar el campo de nombre
    var nombreFieldValue = $("#nombre").val().trim();
    if (!/^[a-zA-Z\s]+$/.test(nombreFieldValue) || nombreFieldValue==="") {
        $("#nombre").addClass("is-invalid");
        isValid = false;
    } else {
        $("#nombre").removeClass("is-invalid");
    }

    // Validar el campo de apellido
    var apellidoFieldValue = $("#apellido").val().trim();
    if (!/^[a-zA-Z\s]+$/.test(apellidoFieldValue) || apellidoFieldValue==="") {
        $("#apellido").addClass("is-invalid");
        isValid = false;
    } else {
        $("#apellido").removeClass("is-invalid");
    }

    // Validar la edad como un número entero mayor que 0
    var edadFieldValue = $("#edad").val().trim();
    if (!/^[1-9]\d*$/.test(edadFieldValue) || edadFieldValue==="") {
        $("#edad").addClass("is-invalid");
        isValid = false;
    } else {
        $("#edad").removeClass("is-invalid");
    }

    // Verificar que los campos no estén vacíos
    $("#direccion").each(function () {
        var fieldValue = $(this).val().trim();
        if (fieldValue === "") {
            $(this).addClass("is-invalid");
            isValid = false;
        }
    });
    // Verificar nivel de estudio
        var nivelEstudioSelected = $("input[name='nivelEstudio']:checked").val();
        if (nivelEstudioSelected === undefined) {
            $("input[name='nivelEstudio']").addClass("is-invalid");
            isValid = false;
        }
        // Verificar el campo "Sexo"
        var selectedSexo = $("#sexo").val();
        if (selectedSexo === "") {
            $("#sexo").addClass("is-invalid");
            isValid = false;
        }

    if (!isValid) {
        e.preventDefault(); // Evitar el envío del formulario si hay errores
    }
});})



//PT6
 $(document).ready(function () {
    // Controlador de eventos 'input' para el campo de sexo
    $("#sexo").on("input", function () {
        var selectedSexo = $("#sexo").val();
        if (selectedSexo === "Masculino" || selectedSexo === "Femenino") {
            $(this).removeClass("is-invalid");
        } else {
            $(this).addClass("is-invalid");
            isValid = false;
        }
    });
     
    // Controlador de eventos 'change' para los botones de radio de nivel de estudio
    $("input[name='nivelEstudio']").on("change", function () {
        $("input[name='nivelEstudio']").removeClass("is-invalid");
    });

    // Controlador de envío del formulario
    $("#form6").submit(function (e) {
    // Restablecer isValid a true al comienzo del controlador de envío
    var isValid = true;

    // Validar el campo de nombre
    var nombreFieldValue = $("#nombre").val().trim();
    if (!/^[a-zA-Z\s]+$/.test(nombreFieldValue) || nombreFieldValue==="") {
        $("#nombre").addClass("is-invalid");
        isValid = false;
    } else {
        $("#nombre").removeClass("is-invalid");
    }

    // Validar el campo de apellido
    var apellidoFieldValue = $("#apellido").val().trim();
    if (!/^[a-zA-Z\s]+$/.test(apellidoFieldValue) || apellidoFieldValue==="") {
        $("#apellido").addClass("is-invalid");
        isValid = false;
    } else {
        $("#apellido").removeClass("is-invalid");
    }

    // Validar la edad como un número entero mayor que 0
    var edadFieldValue = $("#edad").val().trim();
    if (!/^[1-9]\d*$/.test(edadFieldValue) || edadFieldValue==="") {
        $("#edad").addClass("is-invalid");
        isValid = false;
    } else {
        $("#edad").removeClass("is-invalid");
    }

    // Verificar que los campos no estén vacíos
    $("#direccion").each(function () {
        var fieldValue = $(this).val().trim();
        if (fieldValue === "") {
            $(this).addClass("is-invalid");
            isValid = false;
        }
    });
    // Verificar nivel de estudio
        var nivelEstudioSelected = $("input[name='nivelEstudio']:checked").val();
        if (nivelEstudioSelected === undefined) {
            $("input[name='nivelEstudio']").addClass("is-invalid");
            isValid = false;
        }
        // Verificar el campo "Sexo"
        var selectedSexo = $("#sexo").val();
        if (selectedSexo === "") {
            $("#sexo").addClass("is-invalid");
            isValid = false;
        }
          // Verificar que al menos un checkbox esté marcado
        var checkboxes = $("input[name='futbol'], input[name='basquet'], input[name='voley'], input[name='tenis']");
        var isChecked = checkboxes.is(":checked");
        if (!isChecked) {
            $(checkboxes).addClass("is-invalid");
            isValid = false;
        }

    if (!isValid) {
        e.preventDefault(); // Evitar el envío del formulario si hay errores
    }
});})

//pt7
$(document).ready(function () {
    // Agrega un controlador de eventos 'input' a los campos de lunes a viernes
    $("#num1, #num2").on("input", function () {
        var inputValue = $(this).val().trim();
        if (isNaN(inputValue)) {
            $(this).addClass("is-invalid");
        } else {
            $(this).removeClass("is-invalid");
        }
    });
    // Verificar el campo "opcion"
    $("#opcion").on("input",function(){
        var selected = $("#opcion").val();
           if (selected !== "") {
           $("#opcion").removeClass("is-invalid");
           isValid = false;
       }
    })
       
    $("#form7").submit(function (e) {
    // Restablecer isValid a true al comienzo del controlador de envío
    var isValid = true;
    $("#num1, #num2").each(function () {
        var fieldValue = $(this).val().trim();
        if (fieldValue === "" || isNaN(fieldValue)) {
            $(this).addClass("is-invalid");
            isValid = false;}
       // Verificar el campo "opcion"
       var selected = $("#opcion").val();
       if (selected === "") {
           $("#opcion").addClass("is-invalid");
           isValid = false;
       }
        })
        if (!isValid) {
            e.preventDefault(); // Evitar el envío del formulario si hay errores
        }
})})
//pt8
$(document).ready(function () {
    // Validar la edad como un número entero mayor que 0 en tiempo real
    $("#edad1").on("input", function () {
        var fieldValue = $(this).val().trim();
        if (/^[1-9]\d*$/.test(fieldValue) || fieldValue === "") {
            $(this).removeClass("is-invalid");
        } else {
            $(this).addClass("is-invalid");
        }
    });

    // Controlador de eventos 'change' para los botones de radio de nivel de estudio
    $("input[name='condicion']").on("change", function () {
        $("input[name='condicion']").removeClass("is-invalid");
    });

    $("#form8").submit(function (e) {
        // Restablecer isValid a true al principio de la función de envío
        var isValid = true;

        // Verificar nivel de estudio
        var nivelEstudioSelected = $("input[name='condicion']:checked").val();
        if (nivelEstudioSelected === undefined) {
            $("input[name='condicion']").addClass("is-invalid");
            isValid = false;
        }

        var fieldValue = $("#edad1").val().trim();
        if (fieldValue === "" || isNaN(fieldValue) || parseInt(fieldValue) <= 0) {
            $("#edad1").addClass("is-invalid");
            isValid = false;
        }

        if (!isValid) {
            e.preventDefault(); // Evitar el envío del formulario si hay errores
        }
    });
});
