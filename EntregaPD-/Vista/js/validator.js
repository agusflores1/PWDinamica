$(document).ready(function () {
  // Controlador de eventos 'input' para el campo usuario
  $("#usuario").on("input", function () {
      var fieldValue = $(this).val().trim();
      if (fieldValue === "" || !/^[a-zA-Z]+$/.test(fieldValue)) {
          $(this).removeClass("is-invalid");
      } else {
          $(this).addClass("is-invalid");
      }
  });

  // Controlador de eventos 'input' para el campo clave
  $("#password").on("input", function () {
      var claveValue = $(this).val().trim();
      var usuarioValue = $("#usuario").val().trim();

      if (
          claveValue.length > 7 &&
          claveValue !== usuarioValue &&
          /^[0-9]+$/.test(claveValue)
      ) {
          $(this).removeClass("is-invalid");
      } else {
          $(this).addClass("is-invalid");
      }
  });
});

$(document).ready(function () {
  // Controlador de envío del formulario
  $("#formLogin").submit(function (e) {
      var claveValue = $("#password").val().trim();
      var usuarioValue = $("#usuario").val().trim();
      var isValid = true;

      // Validar campo de usuario
      if (usuarioValue === "" || usuarioValue.length < 4 || !/^[a-zA-Z]+$/.test(usuarioValue)) {
          $("#usuario").addClass("is-invalid");
          isValid = false;
      } else {
          $("#usuario").removeClass("is-invalid");
      }

      // Validar campo de contraseña
      if (
          claveValue === "" ||
          claveValue === usuarioValue ||
          claveValue.length < 8 ||
          !/^[0-9]+$/.test(claveValue)
      ) {
          $("#password").addClass("is-invalid");
          isValid = false;
      } else {
          $("#password").removeClass("is-invalid");
      }

      if (!isValid) {
          e.preventDefault(); // Evitar el envío del formulario si hay errores
      }
  });
});

$(document).ready(function() {
    $("#form").submit(function(event) {
        if (!validarActualizacion()) {
            event.preventDefault(); // Evita el envío del formulario si no pasa la validación
        }
    });
    
    function validarActualizacion() {
        var isValid = true;
        
        var usuarioValue = $("#usnombre").val().trim();
        var passValue = $("#uspass").val().trim();
        var mailValue = $("#usmail").val().trim();
        
        if (usuarioValue === "" || usuarioValue.length < 4 || !/^[a-zA-Z]+$/.test(usuarioValue)) {
            $("#usnombre").addClass("is-invalid");
            isValid = false;
        } else {
            $("#usnombre").removeClass("is-invalid");
        }
        
        if (passValue === "" || passValue === usuarioValue || passValue.length < 8 || !/^\d+$/.test(passValue)) {
            $("#uspass").addClass("is-invalid");
            isValid = false;
        } else {
            $("#uspass").removeClass("is-invalid");
        }
        
        if (mailValue === "" || !/@/.test(mailValue)) {
            $("#usmail").addClass("is-invalid");
            isValid = false;
        } else {
            $("#usmail").removeClass("is-invalid");
        }
        
        return isValid;
    }
});

