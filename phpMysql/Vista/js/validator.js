
    // Función para validar el formulario antes de enviarlo
    function validarFormulario() {
        var patente = document.getElementById("patente").value;

        // Verificar si el campo de patente está vacío
        if (patente.trim() === "") {
            alert("Por favor, ingrese una patente.");
            return false; // Evita que el formulario se envíe
        }

        return true; // Envía el formulario si la validación es exitosa
    }
