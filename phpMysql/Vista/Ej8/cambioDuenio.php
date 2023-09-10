<?php include_once("../Estructura/cabecera.php"); ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <h3>Cambio Dueño</h3>

    <form class="d-flex flex-column needs-validation" method="GET" action="accion.php" id="form8" name="form8">
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="patente">Ingrese patente:</label>
            </div>
            <div class="form-group col-md-2">
                <input type="text" id="patente" name="patente" class="form-control validate" maxlength="3">
                <div class="invalid-feedback">
                    Por favor, ingrese un número válido.
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="DNI">Ingrese DNI:</label>
            </div>
            <div class="form-group col-md-2">
                <input type="text" id="DNI" name="DNI" class="form-control validate" maxlength="3">
                <div class="invalid-feedback">
                    Por favor, ingrese un número válido.
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-7 mb-3">
                <button class="btn btn-primary" type="submit" id="Enviar" name="Enviar">Enviar</button>
                <button class="btn btn-light" type="reset" name="reset" id="reset">Borrar</button>
            </div>
        </div>
    </form>
</main>

<?php include("../Estructura/pie.php"); ?>
