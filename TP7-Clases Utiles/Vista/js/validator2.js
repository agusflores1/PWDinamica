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



// Función para manejar el clic del botón "Login"
function validarUsuario() {
  var isValid = true;

  // Validación de campo de usuario y contraseña
  var usuarioValue = $("#usuario").val().trim();
  var claveValue = $("#password").val.trim();

  if (usuarioValue === "" || usuarioValue.length < 4) {
      $("#usuario").addClass("is-invalid");
      isValid = false;
  } else {
      $("#usuario").removeClass("is-invalid");
  }

  if (claveValue === "" || claveValue.length < 8 || claveValue === usuarioValue) {
      $("#password").addClass("is-invalid");
      isValid = false;
  } else {
      $("#password").removeClass("is-invalid");
  }

  if (isValid) {
      // El formulario es válido, puedes enviarlo.
      document.getElementById("formBienvenido1").submit();
  } else {
      alert("Por favor, completa los campos y verifica el reCAPTCHA.");
  }
}





