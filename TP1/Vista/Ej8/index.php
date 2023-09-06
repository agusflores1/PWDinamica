
<?php include_once ("../Estructura/cabecera.php"); ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <!-- Contenido de la página -->
    <h1>Bienvenido a Cine Cinem@as:</h1>
    <form class="d-flex flex-column needs-validation" method="GET" action="ej8.php" id="form8" name="form8">
        <div class="form-row"> <!-- Agregamos una fila de formulario -->
            <div class="form-group col-md-2">
                <label for="edad1">Ingrese su edad:</label>
            </div>
            <div class="form-group col-md-2">
                <input type="text" id="edad1" name="edad1" class="form-control validate" maxlength="3">
                <div class="invalid-feedback">
                    Por favor, ingrese un número válido.
                </div>
            </div>
        </div>

        <div class="form-group">
            <label>Es usted estudiante?</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="condicion" id="condicion">
                <label class="form-check-label" for="condicion_si">Si</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="condicion" id="condicion_no">
                <label class="form-check-label" for="condicion_no">No</label>
            </div>
            <div class="invalid-feedback">
                Por favor, seleccione una opción.
            </div>
        </div>

        <div class="col-md-7 mt-3 d-flex">
            <button class="btn btn-primary me-md-2" type="submit" id="Enviar" name="Enviar">Enviar</button>
            <button class="btn btn-light" type="reset" name="reset" id="reset">Borrar</button>
        </div>
    </form>
</main>

<?php include ("../Estructura/pie.php"); ?>
