grecaptcha.ready(function() {
  grecaptcha.execute('6LePBmAoAAAAABb-_4mXbM24-XurBUG3wnF73FLG', { action: 'formulario' })
    .then(function(respuestaToken) {
      const itoken = document.getElementById('recaptchaToken');
      itoken.value = respuestaToken;
    });
});

$(document).ready(function() {
  // Controlador de eventos 'input' para los campos usuario y clave
  $("#usuario").on("input", function() {
    var fieldValue = $(this).val().trim();
    if (fieldValue === "" || /[a-zA-Z]/.test(fieldValue) || /\d/.test(fieldValue)) {
      $(this).removeClass("is-invalid");
    } else {
      $(this).addClass("is-invalid");
    }
  });

  // Controlador de eventos 'input' para el campo clave
  $("#password").on("input", function() {
    var claveValue = $(this).val().trim();
    var usuarioValue = $("#usuario3").val().trim();

    if (
      claveValue.length > 9 ||
      claveValue === usuarioValue || claveValue === ""
    ) {
      $(this).removeClass("is-invalid");
    } else {
      $(this).addClass("is-invalid");
    }
  });

  // Controlador de envío del formulario
  $("#form3").submit(function(e) {
    var isValid = true;
    var usuarioValue = $("#usuario").val().trim();
    var claveValue = $("#password").val().trim();

    // Validación de campo de usuario
    if (usuarioValue === "" || usuarioValue.length < 4) {
      $("#usuario").addClass("is-invalid");
      isValid = false;
    } else {
      $("#usuario").removeClass("is-invalid");
    }

    // Validación de campo de contraseña
    if (claveValue === "" || claveValue.length < 8 || claveValue === usuarioValue) {
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



