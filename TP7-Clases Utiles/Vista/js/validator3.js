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
  $("#password").on("input", function () {
      var claveValue = $(this).val().trim();
      var usuarioValue = $("#usuario").val().trim();

      if (
          claveValue.length > 9 ||
          claveValue !== usuarioValue || claveValue===""
      ) {
          $(this).removeClass("is-invalid");
      } else {
          $(this).addClass("is-invalid");
      }
  });
  
});


$(document).ready(function () {
  // Controlador de envío del formulario
  $("#form3").submit(function (e) {
    var claveValue = $("#password").val().trim();
    var usuarioValue = $("#usuario").val().trim();
    var isValid = true;

    // Validar campo de usuario
    if (usuarioValue === "" || usuarioValue.length  < 4 ) {
      $("#usuario").addClass("is-invalid");
      isValid = false;
    } else {
      $("#usuario").removeClass("is-invalid");
    }

    // Validar campo de contraseña
    if (claveValue === "" || usuarioValue === claveValue || claveValue.length <8) {
      $("#password").addClass("is-invalid");
      isValid = false;
    } else {
      $("#password").removeClass("is-invalid");
    }

    // la respuesta del reCAPTCHA
    var captchaResponse = grecaptcha.getResponse();

    // Validación de reCAPTCHA
    if (captchaResponse === "") {
      alert("Por favor, completa el reCAPTCHA antes de enviar el formulario.");
      isValid = false;
    }

    if (!isValid) {
      e.preventDefault(); // Evitar el envío del formulario si hay errores
    }
  });
});

