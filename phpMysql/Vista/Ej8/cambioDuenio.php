<?php include_once ("../Estructura/cabecera.php"); ?>

<main class="col-md-6 ms-sm-auto col-lg-10 px-md-4 "  style="margin-top: 10px;">
    <div class="card col-sm-10 p-3">
        <div class="card-header">
            <h3 class="text-primary">Cambio de dueño:</h3>
        </div>
        <div class="card-body">
            <form class="d-flex flex-column needs-validation" method="GET" action="accionCambioDuenio.php" id="form8" name="form8" onsubmit="return validarCambioDuenio()">
                <div class="row">
                    <div class="col-md-4 mt-3">
                        <label class="form-label">Ingrese su patente:</label>
                        <input type="text" name="patente" id="patente" class="form-control validate" maxlength="7">
                        <div class="invalid-feedback">
                            Por favor, ingrese su patente.
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <label class="form-label">Ingrese DNi:</label>
                        <input type="text" name="DNI" id="DNI" class="form-control validate" maxlength="8">
                        <div class="invalid-feedback">
                            Por favor, ingrese un DNI.
                        </div>
                    </div>
                </div>
                <div class="mt-3 d-flex justify-content-end">
                    <button class="btn btn-primary me-md-2" type="submit" id="Enviar" name="Enviar">Enviar</button>
                    <button class="btn btn-light" type="reset" name="reset" id="reset">Borrar</button>
                </div>
            </form>
        </div>
    </div>
</main>

<?php include ("../Estructura/pie.php"); ?>
